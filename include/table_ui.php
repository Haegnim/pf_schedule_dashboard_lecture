<!-- table contents on right side  -->
<section class="table-ui">
                <div class="new-update">
                    <div class="tit-box">
                        <p>Recent Update</p>
                        <a href="#">More</a>
                    </div>
                    <ul class="con-details">
                    <?php
  include $_SERVER["DOCUMENT_ROOT"]."/connect/db_conn.php";
  $sql = "SELECT * FROM SP_table ORDER BY SP_idx DESC LIMIT 5";
  $ta_result = mysqli_query($dbConn, $sql);

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
                    
        </div>
        <div class="each-contents">
            <div class="each-btns">
                <button class="active" value='database'>Database</button>
                <button value='thermomethr-half'>API</button>
                <button value='clone'>Renewal</button>
                <button value='bar-chart-o'>Planning</button>
            </div>
            <ul class="con-details" id="con-details">


            </ul>
                </div>
            </section>
