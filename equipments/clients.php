<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
    if( isset($_GET['editclient']) ){
        include_once "includes/edit/editclient.php";
    }elseif( isset($_GET['deleteclient']) ){
        include_once "includes/delete/deleteclient.php";
    }elseif( isset($_GET['editclient']) ){
        include_once "includes/edit/editclient.php";
    }else{
        include_once "includes/adminpages/clients.php";
    }
}else{
    include_once "includes/login/login_admin.php";

}
include 'includes/footer.php';

