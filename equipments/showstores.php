<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
	include 'includes/adminpage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='store')
{
	include 'includes/storepage.php';

}elseif (isset($_SESSION['login']) AND $_SESSION['login']=='client')
{
	
	if(isset($_GET['items']))
		include 'includes/itemslist.php';
	else
		include 'includes/clientpages/showstores.php';


}else{
			include_once 'includes/login/home.php';
}

include_once 'includes/footer.php';


?>
