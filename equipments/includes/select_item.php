<?php

$id	=	$_GET['select_item'];

?>
		<h2>إضافة منتج</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php
	
	if( isset($_POST['add']) ){
		
		$store_id		=	(float)$_SESSION['ID'];
		$item_id		=	(int)$id;
		$price			=	(float)$_POST['price'];
		$quantity		=	(int)$_POST['quantity'];
		$description	=	addslashes($_POST['description']);
		$category_id	=	(int)show_value('items','item_id',$id,'category_id');
		
		 if(!empty($_FILES['image']))
		  {
			// https://gist.github.com/taterbase/2688850
			$ext 		= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$newName	= rand(1,100).time().'.'.$ext;	
			
			$imagePath= $path . $newName;

			if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
				$imageName	=	$newName;	
			}
		  }
		  
		  if(!isset($imageName)){
			$imageName	=	show_value ('items','item_id',$id,'image');  
		   }		
		
			$sql	=	"INSERT INTO `itemsforstore` (`for_id`, `item_id`, `category_id`, `store_id`, `price`, `description`, `quantity`, `image`) VALUES (NULL, '$item_id', '$category_id', '$store_id', '$price', '$description', '$quantity', '$imageName')";
				
				$connection->query($sql);
				
				echo '
				<div class="success">
					  <p><strong>تمت</strong> الإضافة وسيتم تحويلك لقائمة المنتجات</p>
					</div>

				';
				header("Refresh:3; url=?");
				die();

	}
?>	
			
		<form action="" method="POST" enctype="multipart/form-data" >
			
			<label>السعر</label>
			<input name="price" type="text" required >
			
			<label>الكمية</label>
			<input name="quantity" type="number" required >
			
			<label>الوصف</label>
			<textarea name="description" required ></textarea>


			<label>الرجاء إختر الصورة من جهازك أو تركها الإفتراضية</label>
			<br>
			<label><img src="<?php echo $path.show_value ('items','item_id',$id,'image');?>" width="250px;" ></label>
			<input name="image" type="file" accept="image/*"  >
			
			
			<input type="submit" name="add" value="اضف" >
		</form>
	</div>	
