		<h2>إضافة طرقة دفع</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php
	
	if( isset($_POST['add']) ){
		
		$titlemethod = $_POST['title'];
		
		
		$connection->query("insert into methods (`method_id`,`title`) values (NULL , '$titlemethod' ) ");
		echo '
		<div class="success">
			  <p><strong>تمت</strong> الإضافة وسيتم تحويلك لقائمة طرق الدفع</p>
			</div>

		';
		header("Refresh:3; url=?");
		die();
	}
?>	
			
		<form action="" method="POST" >
			<label>مسمى طرقة الدفع</label>
			<input name="title" type="text" required >

			
			<input type="submit" name="add" value="اضف" >
		</form>
	</div>	
