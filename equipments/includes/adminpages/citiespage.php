<h2>قائمة المدن</h2>
<div class="spaceTable">

 <a href="?addcity" class="btn successbnt">إضافة</a>

    <table >
        <tr>
            <th width="70%" >المدينة</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </tr>

 <?php
        $result = $connection->query("select  *  from cities");

        while( $row	= mysqli_fetch_assoc($result) ) {
?>
       <tr>       
			<td><?php echo $row['title'];?></td>
			<td><a href="?editcity=<?php echo $row['city_id'];?>" >تعديل</a></td>
			<td><a href="?deletecity=<?php echo $row['city_id'];?>" >حذف</a></td>
       </tr>
 <?php } ?>      
       
      
        
    </table>


</div>

