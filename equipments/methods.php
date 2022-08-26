<?php
	
	include_once "includes/connection.php";
	include_once "includes/functions.php";
	
	include_once "includes/header.php";
	
	if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
	{
		if( isset($_GET['addmethod']) )
			include_once "includes/add/addmethod.php";
		elseif( isset($_GET['editmethod']) )
			include_once "includes/edit/editmethod.php";
		elseif( isset($_GET['deletemethod']) )
			include_once "includes/delete/removemethod.php";
		else
			include_once "includes/adminpages/methods.php";
	}else{
			include_once "includes/login/login_admin.php";
		
	}	
	
	include_once "includes/footer.php";

?>
