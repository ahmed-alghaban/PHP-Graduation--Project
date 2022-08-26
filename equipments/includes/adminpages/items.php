<h2>قائمة المنتجات</h2>
<div class="spaceTable">

    <a href="?additem" class="btn successbnt">إضافة</a>

    <table >
        <tr>
            <th>إسم المنتج</th>
            <th>القسم</th>
            <th>الصورة</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </tr>

 <?php
        $result = $connection->query("select  *  from items");

        while( $row	= mysqli_fetch_assoc($result) ) {
?>
       <tr>       
			<td><?php echo $row['title'];?></td>
			<td><?php echo show_value ('categories','category_id',$row['category_id'],'title');?></td>
			<td><img src="<?php echo $path.$row['image'];?>" width="150px;" ></td>
			<td><a href="?edititem=<?php echo $row['item_id'];?>" >تعديل</a></td>
			<td><a href="?deleteitem=<?php echo $row['item_id'];?>" >حذف</a></td>
       </tr>
 <?php } ?>      
       
      
        
    </table>


</div>

