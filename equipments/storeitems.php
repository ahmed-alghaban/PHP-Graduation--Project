<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='store')
{
    if( isset($_GET['category']) ){
        include_once "includes/storecategory.php";
   }elseif( isset($_GET['select_item']) ){
        include_once "includes/select_item.php";
   }elseif( isset($_GET['edit_for_id']) ){
        include_once "includes/for_id/edit_for_id.php";
   }elseif( isset($_GET['delete_for_id']) ){
        include_once "includes/for_id/delete_for_id.php";
   }else{
        include_once "includes/storeitems.php";
   }
}else{
			include_once "includes/login/home.php";
	
}
include 'includes/footer.php';
