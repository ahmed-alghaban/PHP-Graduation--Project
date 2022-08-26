<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
    if( isset($_GET['editstore']) ){
        include_once "includes/edit/editstore.php";
   }elseif( isset($_GET['deletestore']) ){
        include_once "includes/delete/deletestore.php";
   }elseif( isset($_GET['editstore']) ){
        include_once "includes/editstore.php";
   }else{
        include_once "includes/adminpages/stores.php";
   }
}else{
			include_once "includes/login/login_admin.php";
	
}
include 'includes/footer.php';
