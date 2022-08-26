	<h2>الإضافة للسلة</h2>
	  <div class="contentCenterd">	
<?php

	
	if(!isset($_SESSION['items'])){
		$_SESSION['items']=	array();
	}
	
	if( !in_array($_GET['add'],$_SESSION['items']) ){
			array_push($_SESSION['items'],$_GET['add']); // 7
	}
	
	$msg	=	"تم إضافة العنصر إلى السلة";
	echo '
		<div class="success">
			  <p>'.$msg.'</p>
			</div>

		';
	$back= $_SERVER['HTTP_REFERER'];
	header("Refresh:3; url=$back");
	die();
?>	
	
	
	</div>	
