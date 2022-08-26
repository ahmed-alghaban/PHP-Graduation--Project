<div class="spaceTable">

<?php

$id 	=	(int)$_GET['reject'];

 edit_value('requestitems','request_item_id',$id,'status','reject');
echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الرفض بنجاح وجاري تحويلك إلى قائمة الطلبات الجديدة</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
