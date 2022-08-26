<div>

<h2>الطلبات الجديدة التي بإنتظار الموافقة</h2>

			  
				 <table >
						<tr>
							<th> رقم الطلب</th>
							<th>العميل</th>
							<th>رقم الجوال</th>
							<th>عنوان الطلب</th>
							<th>تاريخ بداية الحجز</th>
							<th>تاريخ نهاية الحجز</th>
							<th>وقت الطلب</th>
							<th>العناصر المطلوب</th>
							
						</tr>

				 <?php
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='new' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo $row['request_id'];?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'name');?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'mobile');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'address');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_start');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_end');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'insert_date');?></td>
							<td>
									<table>
										<tr>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											<th>الموافقة</th>
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='new' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td>
												<img src="<?php echo $path.show_value('itemsforstore','for_id',$rowItems['for_id'],'image');?>" width="100px" >
												<br>
												<?php echo show_value('items','item_id',$rowItems['item_id'],'title');?>
											</td>
											<td><?php echo $rowItems['quantity'];?></td>
											<td><?php echo $rowItems['price'];?></td>
											<td>
												<a href="?approve=<?php echo $rowItems['request_item_id'];?>" >الموافقة</a>
												<br> 
												<a href="?reject=<?php echo $rowItems['request_item_id'];?>" >الرفض</a> 
												</td>
										</tr>
									 <?php } ?> 	
									</table>
							</td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
			  


<h2>الطلبات الموافق عليها وتحت التنفيذ</h2>

			  
				 <table >
						<tr>
							<th> رقم الطلب</th>
							<th>العميل</th>
							<th>رقم الجوال</th>
							<th>عنوان الطلب</th>
							<th>تاريخ بداية الحجز</th>
							<th>تاريخ نهاية الحجز</th>
							<th>وقت الطلب</th>
							<th>العناصر المطلوب</th>
							
						</tr>

				 <?php
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='approve' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo $row['request_id'];?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'name');?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'mobile');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'address');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_start');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_end');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'insert_date');?></td>
							<td>
									<table>
										<tr>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											<th>حالة التسليم</th>
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='approve' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td>
												<img src="<?php echo $path.show_value('itemsforstore','for_id',$rowItems['for_id'],'image');?>" width="100px" >
												<br>
												<?php echo show_value('items','item_id',$rowItems['item_id'],'title');?>
											</td>
											<td><?php echo $rowItems['quantity'];?></td>
											<td><?php echo $rowItems['price'];?></td>
											<td>
												<a href="?deliver=<?php echo $rowItems['request_item_id'];?>" >سُلمت</a>												
											</td>
										</tr>
									 <?php } ?> 	
									</table>
							</td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>


<h2>الطلبات التي سُلمت للعميل</h2>

			  
				 <table >
						<tr>
							<th> رقم الطلب</th>
							<th>العميل</th>
							<th>رقم الجوال</th>
							<th>عنوان الطلب</th>
							<th>تاريخ بداية الحجز</th>
							<th>تاريخ نهاية الحجز</th>
							<th>وقت الطلب</th>
							<th>العناصر المطلوب</th>
							
						</tr>

				 <?php
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='deliver' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo $row['request_id'];?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'name');?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'mobile');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'address');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_start');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_end'); if( show_value('requests','request_id',$row['request_id'],'rent_end') < date('Y-m-d') ) echo  "<br>متأخر";?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'insert_date');?></td>
							<td>
									<table>
										<tr>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											<th>حالة الإرجاع</th>
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='deliver' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td>
												<img src="<?php echo $path.show_value('itemsforstore','for_id',$rowItems['for_id'],'image');?>" width="100px" >
												<br>
												<?php echo show_value('items','item_id',$rowItems['item_id'],'title');?>
											</td>
											<td><?php echo $rowItems['quantity'];?></td>
											<td><?php echo $rowItems['price'];?></td>
											<td>
												<a href="?recived=<?php echo $rowItems['request_item_id'];?>" >تم الإرجاع</a>												
											</td>
										</tr>
									 <?php } ?> 	
									</table>
							</td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
	
	
<h2>الطلبات المنتهية</h2>

			  
				 <table >
						<tr>
							<th> رقم الطلب</th>
							<th>العميل</th>
							<th>رقم الجوال</th>
							<th>عنوان الطلب</th>
							<th>تاريخ بداية الحجز</th>
							<th>تاريخ نهاية الحجز</th>
							<th>وقت الطلب</th>
							<th>العناصر المطلوب</th>
							
						</tr>

				 <?php
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='recived' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo $row['request_id'];?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'name');?></td>
							<td><?php echo show_value('clients','client_id',show_value('requests','request_id',$row['request_id'],'client_id'),'mobile');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'address');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_start');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'rent_end');?></td>
							<td><?php echo show_value('requests','request_id',$row['request_id'],'insert_date');?></td>
							<td>
									<table>
										<tr>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE store_id='".$_SESSION['ID']."' AND status='recived' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td>
												<img src="<?php echo $path.show_value('itemsforstore','for_id',$rowItems['for_id'],'image');?>" width="100px" >
												<br>
												<?php echo show_value('items','item_id',$rowItems['item_id'],'title');?>
											</td>
											<td><?php echo $rowItems['quantity'];?></td>
											<td><?php echo $rowItems['price'];?></td>
											
										</tr>
									 <?php } ?> 	
									</table>
							</td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
		
<br>			
<br>			
</div>
