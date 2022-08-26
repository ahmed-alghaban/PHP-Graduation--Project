<?php
	$id	=	$_GET['category'];
?>
<h2>قائمة منتجات</h2>
<h2><?php echo show_value ('categories','category_id',$id,'title'); ?></h2>
<div class="spaceTable">

    <table >
        <tr>
            <th>إسم المنتج</th>
            <th>الصورة الإفتراضية</th>
            <th>الإختيار</th>
        </tr>

 <?php
        $result = $connection->query("select  *  from items where category_id='$id' ");

        while( $row	= mysqli_fetch_assoc($result) ) {
?>
       <tr>       
			<td><?php echo $row['title'];?></td>
			<td><img src="<?php echo $path.$row['image'];?>" width="150px;" ></td>
			<td><a href="?select_item=<?php echo $row['item_id'];?>" >إختيار</a></td>
       </tr>
 <?php } ?>      
       
      
        
    </table>


</div>

