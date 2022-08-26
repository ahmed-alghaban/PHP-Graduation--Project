<?php
	
	include_once "includes/connection.php";
	include_once "includes/functions.php";
	
	include_once "includes/header.php";
	
	if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
	{
		if( isset($_GET['addcategory']) )
			include_once "includes/add/add_category.php";
		elseif( isset($_GET['editcategory']) )
			include_once "includes/edit/edit_category.php";
		elseif( isset($_GET['deletecategory']) )
			include_once "includes/delete/removes.php";
		else
			include_once "includes/adminpages/categories.php";
	}else{
			include_once "includes/login/login_admin.php";
		
	}	
	
	include_once "includes/footer.php";

?>
