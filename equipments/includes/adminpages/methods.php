<h2>قائمة طرق الدفع</h2>

<div class="spaceTable">



    <a href="?addmethod" class="btn successbnt">إضافة</a>



    <table border="1" width="100%">

        <tr>

            <th width="70%" >مسمى الطريقة</th>

            <th>التعديل</th>

            <th>الحذف</th>

        </tr>

        <?php

        $result = $connection->query("select  *  from methods");

        while( $row	= mysqli_fetch_assoc($result) ){

            ?>

            <tr>

                <td><?php echo $row['title'];?></td>

                <td><a href="?editmethod=<?php echo $row['method_id'];?>" >التعديل</a></td>

                <td><a href="?deletemethod=<?php echo $row['method_id'];?>"   onclick="return confirm('هل أنت متأكد من عملية الحذف');" >الحذف</a></td>

            </tr>

        <?php } ?>

    </table>


</div>
