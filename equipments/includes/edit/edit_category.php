		<h2>تعديل قسم</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php

$id	=	(int)$_GET['editcategory'];
$sql	=	"select * from categories where category_id='$id' limit 1";
$result =	$connection->query($sql);
$row	=	mysqli_fetch_assoc($result);


	if( isset($_POST['edit']) ){
		
		$title_category = $_POST['title'];
		
		edit_value("categories","category_id",$id,"title",$title_category);
		
		echo '
		<div class="success">
			  <p><strong>تمت</strong>عملية التعديل وسيتم تحويلك لقائمة الاقسام</p>
			</div>

		';
		header("Refresh:3; url=?");
		die();
	}


?>	
			
		<form action="" method="POST" >
			<label>مسمى القسم</label>
			<input name="title" type="text" value="<?php echo $row['title'];?>" required >

			
			<input type="submit" name="edit" value="عدل" >
		</form>
	</div>	
