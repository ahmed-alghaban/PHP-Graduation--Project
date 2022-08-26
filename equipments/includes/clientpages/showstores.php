<div>
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_tabs -->

<h2>المتجر</h2>
<p>إضغط على اسم القسم حتى تظهر لك منتجات القسم</p>


<div class="tab">
	<?php
		$categories_id		=	array();
		$categories_title	=	array();
		 
		 $resultcategory = $connection->query("select  *  from categories");
			while( $rowcategory	= mysqli_fetch_assoc($resultcategory) ) {
				array_push($categories_id,$rowcategory['category_id']);
				array_push($categories_title,$rowcategory['title']);
				$tabis	=	"openCity(event, '".$rowcategory['category_id']."')";
				echo '<button class="tablinks" onclick="'.$tabis.'">'.$rowcategory['title'].'</button>';
			}
	?> 
</div>


<?php
	foreach($categories_id AS $index=>$value){ ?>
		
			<div id="<?php echo $value;?>" class="tabcontent">
			  <h3><?php echo $categories_title[$index];?></h3>
			  
				 <table >
						<tr>
							<th>إسم المنتج</th>
							<th>الصورة</th>
							<th>المتاجر تقدم الخدمة</th>
							<th>المتوفر</th>
							<th>مشاهدة</th>
						</tr>

				 <?php
						$result = $connection->query("select  *  from items where category_id='$value' ");

						while( $row	= mysqli_fetch_assoc($result) ) {
				?>
					   <tr>       
							<td><?php echo $row['title'];?></td>
							<td><img src="<?php echo $path.$row['image'];?>" width="150px;" ></td>
							<td><?php  show_stores($row['item_id']);?></td>
							<td><?php  echo count_available($row['item_id']);?></td>
							<td><a href="?items=<?php echo $row['item_id'];?>">اضغط هنا</a></td>
					   </tr>
				 <?php } ?>      
					   
					  
						
					</table>
			  
			</div>
<?php } ?>
<br>
<br>
</div>
