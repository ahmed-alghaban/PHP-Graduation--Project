	<h2>الخروج من النظام</h2>
	  <div class="contentCenterd">	
<?php

	session_destroy();
	$msg	=	"تم تسجيل الخروج وجاري تحويلك إلى الصفحة الرئيسية للنظام";
	echo '
		<div class="success">
			  <p>'.$msg.'</p>
			</div>

		';
	header("Refresh:3; url=index.php");
		die();
?>	
	
	
	</div>	
