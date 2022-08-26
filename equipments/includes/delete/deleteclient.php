<div class="spaceTable">

<?php

$id 	=	(int)$_GET['deleteclient'];

remove_row('clients','client_id',$id);

echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الحذف  وسيتم تحويلك لقائمة المستخدمين</p>
			</div>

		';

header("Refresh:3,url=?");

?>
</div>
