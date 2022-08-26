<?php
ini_set('display_errors','off');
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
	include 'includes/adminpages/adminpage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='store')
{
	include 'includes/storepage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='client')
{
	
	if(isset($_GET['items']))
		include 'includes/clientpages/itemslist.php';
	elseif(isset($_GET['add'])  )
			include 'includes/clientpages/addToCart.php';
	elseif(isset($_GET['cart'])  )
			include 'includes/clientpages/showcart.php';
	elseif(isset($_GET['requists'])  )
			include 'includes/clientpages/clientrequists.php';
	else
		include 'includes/clientpages/showstores.php';

}else{
	if(isset($_GET['items']))
		include 'includes/clientpages/itemslist.php';
	elseif(isset($_GET['add']) AND !isset($_SESSION['login']) )
			include 'includes/login/login_client.php';
	else
		include 'includes/clientpages/showstores.php';
}

include 'includes/footer.php';
