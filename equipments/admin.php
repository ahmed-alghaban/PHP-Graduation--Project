<?php
include_once 'includes/connection.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if (isset($_SESSION['login']) AND $_SESSION['login']=='administrator')
{
	include 'includes/adminpages/adminpage.php';

}else{
			include_once 'includes/login/login_admin.php';
}
include 'includes/footer.php';

