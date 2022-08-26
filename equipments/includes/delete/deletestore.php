<div class="spaceTable">

<?php

$id 	=	(int)$_GET['deletestore'];

remove_row('stores','store_id',$id);

echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الحذف  وسيتم تحويلك لقائمة المتاجر</p>
			</div>

		';

header("Refresh:3,url=?");

?>
</div>
