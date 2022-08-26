<div>
<?php
	$item_id	=	(int)$_GET['items'] 
?>
<h2><?php echo show_value('items','item_id',$item_id,'title');?></h2>

			  
				 <table >
						<tr>
							<th>اسم المتجر</th>
							<th>الصورة</th>
							<th width="100px">المتوفر</th>
							<th width="100px">السعر</th>
							<th width="100px">أضف للسلة</th>
						</tr>

				 <?php
						$result = $connection->query("select  *  from itemsforstore where item_id='$item_id' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo show_value('stores','store_id',$row['store_id'],'name');?></td>
							<td><img src="<?php echo $path.$row['image'];?>" width="150px;" ></td>
							<td><?php  echo $row['quantity'];?></td>
							<td><?php  echo $row['price'];?></td>
							<td><a href="?add=<?php echo $row['for_id'];?>">أضف للسلة</a></td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
			  
			
<br>			
<br>			
</div>
