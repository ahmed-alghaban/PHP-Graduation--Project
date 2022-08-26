<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
    if( isset($_GET['edititem']) ){
        include_once "includes/edit/edititem.php";
   }elseif( isset($_GET['additem']) ){
        include_once "includes/add/additem.php";
   }elseif( isset($_GET['deleteitem']) ){
        include_once "includes/delete/deleteitem.php";
   }elseif( isset($_GET['edititem']) ){
        include_once "includes/edit/edititem.php";
   }else{
        include_once "includes/adminpages/items.php";
   }
}else{
			include_once "includes/login/login_admin.php";
	
}
include 'includes/footer.php';
