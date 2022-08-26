<h2>اضافة مدنية</h2>
<div class="spaceTable">

    <?php

    if (isset($_POST['addcity'])) {
        $city_name = $_POST['titles'];
        
        $connection ->query("insert into cities (`city_id`,`title`) values (NULL, '$city_name')");
        echo '
		<div class="success">
			  <p><strong>تمت</strong> الإضافة وسيتم تحويلك لقائمة المدن</p>
			</div>

		';

        header("Refresh:3,url=?");
        die();

    }
    ?>
    
    <form action="" method="post">
        <label>اضافة مدن</label>
			<input name="titles" type="text" required >
        
        <input name="addcity" type="submit" value="اضافة">
    </form>

</div>
