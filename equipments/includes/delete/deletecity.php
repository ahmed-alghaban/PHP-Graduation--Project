<div class="spaceTable">

<?php

$id 	=	(int)$_GET['deletecity'];

remove_row('cities','city_id',$id);

echo '
		<div class="success">
			  <p><strong>تمت</strong> عملية الحذف  وسيتم تحويلك لقائمة المدن</p>
			</div>

		';

        header("Refresh:3,url=?");
        
      ?>
</div>
