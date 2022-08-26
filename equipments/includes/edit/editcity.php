<h2>تعدل مدينة</h2>
<div class="spaceTable">

    <?php
$id	=	(int)$_GET['editcity'];

$result = $connection->query("select  *  from cities where city_id='$id' ");

$row	= mysqli_fetch_assoc($result);

    if (isset($_POST['editcity'])) {
        $city_name = $_POST['titles'];
       
       edit_value('cities','city_id',$id,'title',$city_name);
        echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية التعديل  وسيتم تحويلك لقائمة المدن</p>
			</div>

		';

        header("Refresh:3,url=?");
        die();

    }
    ?>
    
    <form action="" method="post">
        <label>مسمى المدينة</label>
        <input name="titles" type="text" value="<?php echo $row['title']; ?>" required>
        <input name="editcity" type="submit" value="تعديل">
    </form>

</div>

