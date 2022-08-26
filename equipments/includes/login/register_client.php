<h2>تسجيل عميل</h2>
<div class="spaceTable" style="padding-right:100px; padding-left:100px; " >

    <?php

    if (isset($_POST['register'])  AND check_username($_POST['username'])==FALSE) {
		
        $name 		= $_POST['name'];
        $email 		= $_POST['email'];
        $username 	= $_POST['username'];
        $password 	= $_POST['password'];
        $mobile 	= $_POST['mobile'];
        $city_id 	= $_POST['city_id'];
        $street 	= $_POST['street'];
        $zip_code 	= $_POST['zip_code'];
        
        $connection ->query("INSERT INTO `clients` (`client_id`, `name`, `username`, `email`, `password`, `mobile`, `city_id`, `street`, `zip_code`, `register_date`) 
												VALUES (NULL, '$name', '$username', '$email', '$password', '$mobile', '$city_id', '$street', '$zip_code', CURRENT_TIMESTAMP )");
        echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية تسجيل عضويتك بنجاح وجاري تحويلك إلى الصفحة الرئيسية</p>
			</div>
		';

        header("Refresh:3,url=index.php");
        
        die();

    }elseif(isset($_POST['danger'])){
		echo '
		<div class="success">
			  <p><strong>عذرا</strong>  تحقق من بياناتك</p>
			</div>
		';
		
		
	}
    ?>
    
    <form action="" method="post">
        <label>الإسم</label>
			<input name="name" type="text" required >
        <label>البريد الإلكتروني</label>
			<input name="email" type="email" required >
        <label>رقم الجوال</label>
			<input name="mobile" type="text" required >
        
        <label>إسم المستخدم</label>
			<input name="username" type="text" required >
        
        <label>كلمة السر</label>
			<input name="password" type="password" required >
        
        <label>المدينة</label>
			<select name ="city_id" required >
				<?php
					 $resultcity = $connection->query("select  *  from cities");
						while( $rowcity	= mysqli_fetch_assoc($resultcity) ) {
							echo "<option value='".$rowcity['city_id']."' >".$rowcity['title']."</option>";
						}
				
				?>
			
			</select>
        
        
        <label>الشارع</label>
			<input name="street" type="text" required >
			
        
        <label>الرمز البريدي</label>
			<input name="zip_code" type="text" required >
			
        
        
        <input name="register" type="submit" value="تسجيل">
    </form>

</div>
