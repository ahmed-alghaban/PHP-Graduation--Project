		<h2>تعديل طريقة دفع</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php

$id	=	(int)$_GET['editmethod'];
$sql	=	"select * from methods where method_id='$id' limit 1";
$result =	$connection->query($sql);
$row	=	mysqli_fetch_assoc($result);


	if( isset($_POST['edit']) ){
		
		$title_method = $_POST['title'];
		
		edit_value("methods","method_id",$id,"title",$title_method);
		
		echo '
		<div class="success">
			  <p><strong>تمت</strong>عملية التعديل وسيتم تحويلك لقائمة طرق الدفع</p>
			</div>

		';
		header("Refresh:3; url=?");
		die();
	}


?>	
			
		<form action="" method="POST" >
				<label>مسمى طريقة الدفع</label>
			<input name="title" type="text" value="<?php echo $row['title'];?>" required >

			
			<input type="submit" name="edit" value="عدل" >
		</form>
	</div>	
