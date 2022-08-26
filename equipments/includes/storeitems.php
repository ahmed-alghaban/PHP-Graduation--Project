<h2>قائمة المنتجات</h2>
<div class="spaceTable">


 <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">إضافة منتج</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="">الرجاء إختيار القسم المراد تصفح منتجاته</a>
	<?php
		 $resultcategory = $connection->query("select  *  from categories");
			while( $rowcategory	= mysqli_fetch_assoc($resultcategory) ) {
				echo "<a href='?category=".$rowcategory['category_id']."' >".$rowcategory['title']."</a>";
			}
	?>    
  </div>
</div> 



    <table >
        <tr>
            <th>إسم المنتج</th>
            <th>القسم</th>
            <th>السعر</th>
            <th>الوصف</th>
            <th>المتاح</th>
            <th>الصورة</th>
            <th>التعديل</th>
            <th>الحذف</th>
        </tr>

 <?php
        $result = $connection->query("select  *  from itemsforstore where store_id='".$_SESSION['ID']."' ORDER BY for_id DESC");

        while( $row	= mysqli_fetch_assoc($result) ) {
?>
       <tr>       
			<td><?php echo show_value ('items','item_id',$row['item_id'],'title');?></td>
			<td><?php echo show_value ('categories','category_id',$row['category_id'],'title');?></td>
			<td><?php echo $row['price'];?></td>
			<td><?php echo nl2br($row['description']);?></td>
			<td><?php echo $row['quantity'];?></td>
			<td><img src="<?php echo $path.$row['image'];?>" width="150px;" ></td>
			<td><a href="?edit_for_id=<?php echo $row['for_id'];?>" >تعديل</a></td>
			<td><a href="?delete_for_id=<?php echo $row['for_id'];?>" >حذف</a></td>
       </tr>
 <?php } ?>      
       
      
        
    </table>


</div>

