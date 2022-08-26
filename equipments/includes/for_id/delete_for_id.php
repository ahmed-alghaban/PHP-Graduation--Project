<div class="spaceTable">

<?php

$id 	=	(int)$_GET['delete_for_id'];

remove_row('itemsforstore','for_id',$id);

echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الحذف  وسيتم تحويلك لقائمة المنتجات</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
