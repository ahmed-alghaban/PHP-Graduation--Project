<div>


<h2>السلة</h2>


<?php

$except =  array('addToCart', 'address', 'start', 'dates', 'notes');


	if(isset($_GET['delete'])){
		$id	=	$_GET['delete'];
		unset($_SESSION['items'][$id]);
	}
	
	if(isset($_POST['addToCart']))
	{
		$client_id	=	$_SESSION['ID'];
		$notes		=	addslashes($_POST['notes']);
		$rent_start	=	$_POST['start'];
		$days		=	$_POST['days'];
		$temp		=	" + $days days ";
		$rent_end	=date('Y-m-d', strtotime($rent_start. $temp));
		$address	=	$_POST['address'];
		
		$connection->query("INSERT INTO `requests` (`request_id`, `client_id`, `status`, `notes`, `total`, `rent_start`, `rent_end`, `address`, `insert_date`)
		 VALUES (NULL, '$client_id', 'new', '$notes', '0', '$rent_start', '$rent_end', '$address', CURRENT_TIMESTAMP)");
		
		$request_id = $connection->insert_id;
		
		$total = array();
		
		
		foreach($_POST AS $index => $value){
			if(!in_array($index,$except) ){
//				echo "The item ".$index." quantity = ".$value."<br>";
				$store_id	=	 show_value ('itemsforstore','for_id',$index,'store_id');
				$item_id	=	 show_value ('itemsforstore','for_id',$index,'item_id');
				$quantity	=	$value;
				$price		=	show_value ('itemsforstore','for_id',$index,'price');
				$price		=	$price*$days;
				array_push($total,$price);
				
				$connection->query("INSERT INTO `requestitems` (`request_item_id`, `request_id`, `client_id`,`store_id`, `item_id`, `for_id`, `quantity`, `days`, `price`, `status`)	VALUES (NULL, '$request_id', '$client_id' ,'$store_id', '$item_id', '$index', '$quantity', '$days', '$price', 'new')");
			}
			// الحصة القادمة نضيف للسلة الملاحظات وتاريخ بداية ونهاية الحجز
		}
		edit_value('requests','request_id',$request_id,'total',array_sum($total));
	
	
		unset($_SESSION['items']);
		
			echo '
		<div class="success">
			  <p><strong>تهانينا</strong> تم إرسال طلبك إلى المتاجر المختاره وسيتم الرد عليك بأقرب فرصة</p>
			</div>

		';
		header("Refresh:3; url=index.php");
		die();
	}
	
	
?>


<form action="" method="POST">			  
				 <table >
						<tr>
							<th>اسم المتجر</th>
							<th>الصورة</th>
							<th width="100px">المتوفر</th>
							<th width="100px">السعر</th>
							<th width="100px">الكمية / العدد المطلوب</th>
							<th width="100px">الحذف</th>
						</tr>

				 <?php

						// { 7, 81, 55 }
						/*
								index  0   1   2 
								value   7  81   55
								unset ($array[2])
								unset ($_SESSION['items'][2])
						 */
						foreach ($_SESSION['items'] AS $index=>$value){
							$store_id  = show_value('itemsforstore','for_id',$value,'store_id');
				?>
					   <tr>       
							<td><?php echo show_value('stores','store_id',$store_id,'name');?></td>
							<td><img src="<?php echo $path.show_value('itemsforstore','for_id',$value,'image');?>" width="150px;" ></td>
							<td><?php  echo show_value('itemsforstore','for_id',$value,'quantity');?></td>
							<td><?php  echo show_value('itemsforstore','for_id',$value,'price');?></td>
							<td><input type="number" name="<?php echo $value;?>" value='1' min="1" max="<?php  echo show_value('itemsforstore','for_id',$value,'quantity');?>" > </td>
							<td><a href="?cart&delete=<?php echo $index; ?>">حذف</a></td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
			  
<div class="spaceTable" style="margin-top:20px;">

	<label>العنوان الذي تود إيصال اللوازم له</label>
			<input name="address" type="text" required >

		<label>تاريخ بداية الحجز</label>
			<input name="start" type="date" required >


		<label>عدد أيام الحجز</label>
			<input name="days" type="number" value='1' required >

		<label>الملاحظات</label>
		<textarea name="notes" required >.</textarea>
		
			  <input type="submit" name="addToCart" value="إعتمد السلة" >

</div>

</form>			
<br>			
<br>			
</div>
