		<h2>الحــــذف</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php

	
	if(isset($_GET['deletecategory']) )
	{
		$id	=	(int)$_GET['deletecategory'];
		remove_row("categories","category_id",$id);
		$msg	=	" عملية الحذف وسيتم تحويلك لقائمة الاقسام";
	}
	

		echo '
		<div class="success">
			  <p><strong>تمت</strong>'.$msg.'</p>
			</div>

		';
		header("Refresh:3; url=?");
		die();



?>	
			
	</div>	
