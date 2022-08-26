<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
	include 'includes/requests.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='store')
{
	include 'includes/storepage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='client')
{

		include 'includes/clientpages/showstores.php';

}else{
		include 'includes/clientpages/showstores.php';
}

include 'includes/footer.php';
