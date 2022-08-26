<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
	include 'includes/adminpage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='store')
{
	if(isset($_GET['approve']))
		include 'includes/status/approve.php';
	elseif(isset($_GET['reject']))
		include 'includes/status/reject.php';
	elseif(isset($_GET['deliver']))
		include 'includes/status/deliver.php';
	elseif(isset($_GET['recived']))
		include 'includes/status/recived.php';
	else
		include 'includes/myrequests.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='client')
{

		include 'includes/showstores.php';

}else{
		include 'includes/login_client.php';
}

include 'includes/footer.php';
