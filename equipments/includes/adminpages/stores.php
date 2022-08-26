<h2>قائمة المتاجر</h2>
<div class="spaceTable">

    <table >
        <tr>
            <th>إسم المتجر</th>
            <th>رقم الجوال</th>
            <th>الشارع</th>
            <th>المدينة</th>
            <th>تاريخ الإنتساب</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </tr>

 <?php
        $result = $connection->query("select  *  from stores");

        while( $row	= mysqli_fetch_assoc($result) ) {
?>
       <tr>       
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['street'];?></td>
			<td><?php echo show_value ('cities','city_id',$row['city_id'],'title');?></td>
			<td><?php echo $row['register_date'];?></td>
			<td><a href="?editstore=<?php echo $row['store_id'];?>" >تعديل</a></td>
			<td><a href="?deletestore=<?php echo $row['store_id'];?>" >حذف</a></td>
       </tr>
 <?php } ?>      
       
      
        
    </table>


</div>

