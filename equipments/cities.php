<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
    if( isset($_GET['addcity']) ){
        include_once "includes/add/addcity.php";
   }elseif( isset($_GET['editcity']) ){
        include_once "includes/edit/editcity.php";
   }elseif( isset($_GET['deletecity']) ){
        include_once "includes/delete/deletecity.php";
   }else{
        include_once "includes/adminpages/citiespage.php";
   }
}else{
			include_once "includes/login/login_admin.php";
	
}
include 'includes/footer.php';
