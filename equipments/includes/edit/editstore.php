<h2>تعديل متجر</h2>
<div class="spaceTable" style="padding-right:100px; padding-left:100px; " >

    <?php
$id=	$_GET['editstore'];
$sql	=	"select * from stores where store_id='$id' ";
$result =	$connection->query($sql);
$row	=	mysqli_fetch_assoc($result);

    if (isset($_POST['edit'])  AND check_username_except($_POST['username'],$id)==FALSE ) {

		foreach($_POST AS $index=>$value){
			if($index!='edit')
				edit_value('stores','store_id',$id,$index,$value);
		}
       
              echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية التعديل وجاري تحويلك</p>
			</div>
		';

        header("Refresh:3,url=?");
        
        die();

    }elseif(isset($_POST['edit'])){
			echo '
		<div class="success">
			  <p><strong>عذرا</strong>  إسم المستخدم مكرر الرجاء إختيار إسم مستخدم آخر</p>
			</div>
		';
	}
    ?>
    
    <form action="" method="post">
        <label>اسم المتجر</label>
			<input name="name" type="text" value="<?php echo $row['name'];?>" required >
        <label>البريد الإلكتروني</label>
			<input name="email" type="email" value="<?php echo $row['email'];?>"  required >
        <label>رقم الجوال</label>
			<input name="mobile" type="text"  value="<?php echo $row['mobile'];?>" required >
        
        <label>إسم المستخدم</label>
			<input name="username" type="text"  value="<?php echo $row['username'];?>" required >
        
        <label>كلمة السر</label>
			<input name="password" type="password" value="<?php echo $row['password'];?>"  required >
        
        <label>المدينة</label>
			<select name ="city_id" required >
				<?php
				$city_id	=	$row['city_id'];
				
				echo '<option value="'.$city_id.'" >'.show_value ('cities','city_id',$city_id,'title').'</option>';
					
					 $resultcity = $connection->query("select  *  from cities");
						while( $rowcity	= mysqli_fetch_assoc($resultcity) ) {
							echo "<option value='".$rowcity['city_id']."' >".$rowcity['title']."</option>";
						}
				
				?>
			
			</select>
        
        
        <label>الشارع</label>
			<input name="street" type="text"  value="<?php echo $row['street'];?>" required >
			
        
        <label>الرمز البريدي</label>
			<input name="zip_code" type="text"  value="<?php echo $row['zip_code'];?>" required >
			
        
        
        <input name="edit" type="submit" value="تعديل">
    </form>

</div>
