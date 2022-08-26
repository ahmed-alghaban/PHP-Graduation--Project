		<h2>إضافة منتج</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php
// edititem	

$id	=	(int)$_GET['edititem'];
$sql	=	"select * from items where item_id='$id' limit 1";
$result =	$connection->query($sql);
$row	=	mysqli_fetch_assoc($result);

	
	if( isset($_POST['edit']) ){
		
		$title = $_POST['title'];
		$category_id = $_POST['category_id'];
		
		edit_value('items','item_id',$id,'title',$title);
		edit_value('items','item_id',$id,'category_id',$category_id);
		
		 if(!empty($_FILES['image']))
		  {
			
			$ext 		= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$newName	= rand(1,100).time().'.'.$ext;	
			
			$imagePath= $path . $newName;

			if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
				//
				edit_value('items','item_id',$id,'image',$newName);
				
					
			}
		  }		
		
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
			<label>مسمى المنتج</label>
			<input name="title" type="text" value="<?php echo $row['title'];?>" required >
			
			<label>القسم</label>
			<select name ="category_id" required >
				<?php
				$category_id	=	$row['category_id'];
				
				echo '<option value="'.$category_id.'" >'.show_value ('categories','category_id',$category_id,'title').'</option>';
					
					 $resultcity = $connection->query("select  *  from categories");
						while( $rowcity	= mysqli_fetch_assoc($resultcity) ) {
							echo "<option value='".$rowcity['category_id']."' >".$rowcity['title']."</option>";
						}
				
				?>
			
			</select>
			
			
			<label>صورة المنتج</label>
			<br>
			<label><img src="<?php echo $path.$row['image'];?>" width="150px;" ></label>
			<input name="image" type="file" accept="image/*"  >
			
			
			<input type="submit" name="edit" value="عدل" >
		</form>
	</div>	
