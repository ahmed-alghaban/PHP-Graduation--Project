		<h2>إضافة منتج</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php
	
	if( isset($_POST['add']) ){
		
		$title = $_POST['title'];
		$category_id = $_POST['category_id'];
		
		 if(!empty($_FILES['image']))
		  {
			// https://gist.github.com/taterbase/2688850
			$ext 		= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$newName	= rand(1,100).time().'.'.$ext;	
			
			$imagePath= $path . $newName;

			if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
				//
				$sql	=	"INSERT INTO `items` (`item_id`, `category_id`, `title`, `image`) VALUES (NULL, '$category_id', '$title', '$newName')";
				
				$connection->query($sql);
				
				echo '
				<div class="success">
					  <p><strong>تمت</strong> الإضافة وسيتم تحويلك لقائمة المنتجات</p>
					</div>

				';
				header("Refresh:3; url=?");
				die();	
					
					
			} else{
				echo '
				<div class="danger">
					  <p><strong>عذرا</strong> لم يتم رفع الصورة</p>
					</div>
				';
			}
		  }		
		
		

	}
?>	
			
		<form action="" method="POST" enctype="multipart/form-data" >
			<label>مسمى المنتج</label>
			<input name="title" type="text" required >
			
			<label>القسم</label>
			<select name ="category_id" required >
				<?php
					 $resultcity = $connection->query("select  *  from categories");
						while( $rowcity	= mysqli_fetch_assoc($resultcity) ) {
							echo "<option value='".$rowcity['category_id']."' >".$rowcity['title']."</option>";
						}
				
				?>
			
			</select>
			
			
			<label>صورة المنتج</label>
			<input name="image" type="file" accept="image/*" required >
			
			
			<input type="submit" name="add" value="اضف" >
		</form>
	</div>	
