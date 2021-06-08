<?php
    include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";//
    $sql1 = "SELECT * FROM SP_table WHERE SP_cate = 'database' ORDER BY SP_idx DESC LIMIT 5";
    $ta_result = mysqli_query($dbConn, $sql1);

    if(!$ta_result){
?>
<li>
    <p>입력된 일정이 없습니다.</p>
</li>
<?php
    } else {
        while($ta_row=mysqli_fetch_array($ta_result)){
            $ta_row_cate = $ta_row['SP_cate'];
            $ta_row_tit = $ta_row['SP_tit'];
            $ta_row_reg = $ta_row['SP_reg'];
?>

<li>
    <i class="fa fa-<?=$ta_row_cate?>"></i>
    <div class="con-txt">
        <p><a href="#"><?=$ta_row_tit?></a></p>
        <em><?=$ta_row_reg?></em>
    </div>
</li>
<?php
        }
    }
?>