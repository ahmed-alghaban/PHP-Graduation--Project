	<h2>تسجيل الدخول كمدير</h2>
	  <div class="contentCenterd">	
<?php
if(isset($_POST['login']) AND login_admin($_POST['username'],$_POST['userpassword'])==TRUE)
{
	
	$msg	=	"مرحبا بك ".$_SESSION['name']." سيتم تحويلك إلى لوحة تحكم النظام";
	echo '
		<div class="success">
			  <p>'.$msg.'</p>
			</div>

		';
	header("Refresh:3; url=admin.php");
		die();
}elseif(isset($_POST['login'])){
	
	$msg	=	"تحقق من معلوماتك";
	echo '
		<div class="danger">
			  <p><strong>عذرا </strong>'.$msg.'</p>
			</div>

		';
}
?>	
	
		<form action="" method="POST" >
			<label>إسم المستخدم </label>
			<input name="username" type="text" required >

			
			<label>كلمة السر</label>
			<input name="userpassword" type="password" required >

			
			<input type="submit" name="login" value="دخول" >
		</form>
	</div>	
