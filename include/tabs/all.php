<?php
    $tabIdx = $_GET['key'];
    include $_SERVER['DOCUMENT_ROOT']."/connect/db_conn.php";


    if($tabIdx == "all"){
      $sql = "SELECT * FROM SP_table ORDER BY SP_idx DESC";
    }else{
      $sql = "SELECT * FROM SP_table WHERE SP_cate = '{$tabIdx}' ORDER BY SP_idx DESC LIMIT 5";
    }
    $board_result = mysqli_query($dbConn, $sql);
    while($board_row=mysqli_fetch_array($board_result)){
      $board_row_idx = $board_row['SP_idx'];
      $board_row_cate = $board_row['SP_cate'];
      $board_row_tit = $board_row['SP_tit'];
      $board_row_reg = $board_row['SP_reg'];

      if($board_row_cate == "thermometer-half"){
        $board_row_cate = "API";
      }if($board_row_cate == "clone"){
        $board_row_cate = "Renewal";
      }if($board_row_cate == "bar-chart-o"){
        $board_row_cate = "Planning";
      }
  ?>
<li class="board-contents">
  <span><?=$board_row_idx?></span>
  <span><?=$board_row_cate?></span>
  <span><a href="/schedule/pages/sp_detail_view.php?pageNum=<?=$board_row_idx?>"><?=$board_row_tit?></a></span>
  <span><?=$board_row_reg?></span>
  <span>
    <a href="/schedule/php/sp_delete.php?del_idx=<?=$board_row_idx?>" class="del-btn txt">삭제</a>
    <a href="/schedule/php/sp_delete.php?del_idx=<?=$board_row_idx?>" class="del-btn icon"><i class="fa fa-times"></i></a>
  </span>
</li>

<?php
    }
?>