<h2>تعديل</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php

$id	=	(int)$_GET['edit_for_id'];
$sql	=	"select * from itemsforstore where for_id='$id' limit 1";
$result =	$connection->query($sql);
$row	=	mysqli_fetch_assoc($result);

	
	if( isset($_POST['edit']) ){
	
	
		$price			=	(float)$_POST['price'];
		$quantity		=	(int)$_POST['quantity'];
		$description	=	addslashes($_POST['description']);

		edit_value('itemsforstore','for_id',$id,'price',$price);		
		edit_value('itemsforstore','for_id',$id,'quantity',$quantity);		
		edit_value('itemsforstore','for_id',$id,'description',$description);		
		
		 if(!empty($_FILES['image']))
		  {
			// https://gist.github.com/taterbase/2688850
			$ext 		= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$newName	= rand(1,100).time().'.'.$ext;	
			
			$imagePath= $path . $newName;

			if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
				edit_value('itemsforstore','for_id',$id,'image',$newName);;	
			}
		  }
		  
			
		
				
				echo '
				<div class="success">
					  <p><strong>تمت</strong> التعديل وسيتم تحويلك لقائمة المنتجات</p>
					</div>

				';
				header("Refresh:3; url=?");
				die();
				
	}
?>	

		<form action="" method="POST" enctype="multipart/form-data" >
			
			<label>السعر</label>
			<input name="price" type="text"  value="<?php echo $row['price'];?>" required >
			
			<label>الكمية</label>
			<input name="quantity" type="number"  value="<?php echo (int)$row['quantity'];?>" required >
			
			<label>الوصف</label>
			<textarea name="description" required ><?php echo $row['description'];?></textarea>


			<label>الرجاء إختر الصورة من جهازك أو تركها فارغة</label>
			<br>
			<label><img src="<?php echo $path.$row['image'];?>" width="250px;" ></label>
			<input name="image" type="file" accept="image/*"  >
			
			
			<input type="submit" name="edit" value="عدل" >
		</form>
					
	
	</div>	
