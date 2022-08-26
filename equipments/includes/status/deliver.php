<div class="spaceTable">

<?php

$id 	=	(int)$_GET['deliver'];

 edit_value('requestitems','request_item_id',$id,'status','deliver');
echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية التسليم بنجاح وجاري تحويلك إلى قائمة الطلبات الجديدة</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
