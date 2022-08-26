<div class="spaceTable">

<?php

$id 	=	(int)$_GET['deleteitem'];

remove_row('items','item_id',$id);

echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الحذف  وسيتم تحويلك لقائمة المنتجات</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
