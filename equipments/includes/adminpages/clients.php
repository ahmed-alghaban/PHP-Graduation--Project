<h2>قائمة المستخدمين</h2>
<div class="spaceTable">

    <table >
        <tr>
            <th>إسم المستخدم</th>
            <th>رقم الجوال</th>
            <th>الشارع</th>
            <th>المدينة</th>
            <th>تاريخ الإنتساب</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </tr>

        <?php
        $result = $connection->query("select  *  from clients");

        while( $row	= mysqli_fetch_assoc($result) ) {
            ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['street'];?></td>
                <td><?php echo show_value ('cities','city_id',$row['city_id'],'title');?></td>
                <td><?php echo $row['register_date'];?></td>
                <td><a href="?editclient=<?php echo $row['client_id'];?>" >تعديل</a></td>
                <td><a href="?deleteclient=<?php echo $row['client_id'];?>" >حذف</a></td>
            </tr>
        <?php } ?>



    </table>


</div>

