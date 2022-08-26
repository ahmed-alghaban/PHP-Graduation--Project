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
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE  status='new' ");

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
											<th>إسم المتجر</th>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE status='new' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
										<td><?php echo show_value('stores','store_id',$rowItems['store_id'],'name');?></td>
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
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE status='approve' ");

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
											<th>المتجر</th>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE  status='approve' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td><?php echo show_value('stores','store_id',$rowItems['store_id'],'name');?></td>
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


<h2>الطلبات التي تم تسليمها</h2>

			  
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
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE  status='deliver' ");

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
											<th>المتجر</th>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>
											
										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE  status='deliver' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td><?php echo show_value('stores','store_id',$rowItems['store_id'],'name');?></td>
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
						$result = $connection->query("SELECT DISTINCT `request_id` FROM `requestitems` WHERE  status='recived' ");

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
											<th>المتجر</th>
											<th>العنصر</th>
											<th>الكمية</th>
											<th>الإجمالي</th>

										</tr>
								 <?php
										$resultItems = $connection->query("SELECT * FROM `requestitems` WHERE  status='recived' AND request_id='".$row['request_id']."' ");

										while( $rowItems	= mysqli_fetch_assoc($resultItems) ) {
								?>										
										<tr>
											<td><?php echo show_value('stores','store_id',$rowItems['store_id'],'name');?></td>
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
