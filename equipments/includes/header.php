<html lang="ar" dir="rtl">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipments Project</title>
		<meta charset ="utf-8" >
		<link href="style.css" rel="stylesheet" >
	</head>
	<body>
<div class="topnav">
    <a class="active" href="index.php" title="الرئيسية" ><img src="icons/home.png" ></a>
<?php if(!isset($_SESSION['login'])) { ?>
  <a href="registeration.php"  title="التسجيل" ><img src="icons/register.png" ></a>
<?php } ?>



<?php if(isset($_SESSION['login']) AND $_SESSION['login']=='client' ) { ?>
  <a href="?requists"  title="قائمة طلباتك" ><img src="icons/requists.png" ></a>
<?php } ?>

<?php if(isset($_SESSION['login']) AND $_SESSION['login']=='store'  AND notifcation($_SESSION['ID'])>=1 ) { ?>
<a href="myrequests.php" class="notification">
  <span>الطلبات الجديدة</span>
  <span class="badge"><?php echo notifcation($_SESSION['ID']);?></span>
</a>
<?php } ?>
  
<?php if(isset($_SESSION['login'])) { ?>
  <a href="logout.php" id="lefttop" title="خروج" onclick="return confirm('هل أنت متأكد من عملية الخروج من النظام');" ><img src="icons/logout.png" ></a>
<?php }else{ ?>
  <a href="login.php"  title="الدخول"  ><img src="icons/login.png" ></a>

<?php } ?>

<?php if(isset($_SESSION['items']) ) { ?>
  <a href="?cart" id="lefttop"  title="السلة"  ><img src="uploads/cart.png"  ></a>
<?php } ?>


</div>

<?php
/*
if(isset($_SESSION['items'])){
echo "<pre>";
	print_r($_SESSION['items']);
	echo "</pre>";
	
}
*/
?>
