		<h2>الحــــذف</h2>
		<!-- text file , password,email ,submit -->
	  <div class="contentCenterd">	
	
<?php

	
	if(isset($_GET['deletemethod']) )
	{
		$id	=	(int)$_GET['deletemethod'];
		remove_row("methods","method_id",$id);
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
