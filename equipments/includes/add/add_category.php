		<h2>إضافة قسم</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php
	
	if( isset($_POST['add']) ){
		
		$title_category = $_POST['title'];
		
		
		$connection->query("insert into categories (`category_id`,`title`) values (NULL , '$title_category' ) ");
		echo '
		<div class="success">
			  <p><strong>تمت</strong> الإضافة وسيتم تحويلك لقائمة الاقسام</p>
			</div>

		';
		header("Refresh:3; url=?");
		die();
	}
?>	
			
		<form action="" method="POST" >
			<label>مسمى القسم</label>
			<input name="title" type="text" required >

			
			<input type="submit" name="add" value="اضف" >
		</form>
	</div>	
