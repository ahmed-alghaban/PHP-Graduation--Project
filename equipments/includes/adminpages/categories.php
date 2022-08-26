<h2>قائمة الأقسام</h2>

<div class="spaceTable">



    <a href="?addcategory" class="btn successbnt">إضافة</a>



    <table >

        <tr>

            <th width="70%" >مسمى القسم</th>

            <th>التعديل</th>

            <th>الحذف</th>

        </tr>

        <?php

        $result = $connection->query("select  *  from categories");

        while( $row	= mysqli_fetch_assoc($result) ){

            ?>

            <tr>

                <td><?php echo $row['title'];?></td>

                <td><a href="?editcategory=<?php echo $row['category_id'];?>" >التعديل</a></td>

                <td><a href="?deletecategory=<?php echo $row['category_id'];?>"   onclick="return confirm('هل أنت متأكد من عملية الحذف');" >الحذف</a></td>

            </tr>

        <?php } ?>

    </table>


</div>
