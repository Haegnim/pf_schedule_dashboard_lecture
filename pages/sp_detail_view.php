<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Portfolio schedule</title>

    <!-- Favicon Link -->
    <link rel="shortcut icon" href="/schedule/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/schedule/img/favicon.ico" type="image/x-icon">
    <link rel="apple-tounch-icon" href="/schedule/img/favicon.ico">

    <!-- Customicon Link  -->
    <!-- <link rel="stylesheet" href="/schedule/css/customicon.css"> -->

    <!-- Font Awesome Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Font Link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
    
    <!-- Reset CSS Link -->
    <link rel="stylesheet" href="/schedule/css/reset.css">

    <!-- Plugin CSS Link -->
    <link rel="stylesheet" href="/schedule/lib/css/lightslider.css">
    <link rel="stylesheet" href="/schedule/lib/css/piechart.css">

    <!-- Main CSS Link  -->
    <link rel="stylesheet" href="/schedule/css/style.css">

    <!-- Animation CSS Link  -->
    <link rel="stylesheet" href="/schedule/css/animation.css">

    <!-- Media Query CSS Link -->
    <link rel="stylesheet" href="/schedule/css/media.css">

    <script defer>
        const hostname = window.location.href;
        //console.log(hostname);
        if(hostname == 'http://localhost/schedule/'){
            window.location.replace('http://localhost/schedule/?key=database')
        }
    </script>
</head>
<body>   
    <div class="wrapper">
        <!-- Main Dashboard Frame  -->
        <div class="dashboard">
        <!-- Header include   -->
            <?php
                include $_SERVER['DOCUMENT_ROOT']."/schedule/include/header.php";
            ?>
        <!-- graph-ui    -->
        <section class="graph-ui detail">
        <?php
                include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total_pofol.php";
            ?>

          <div class="each-pofol">
              <div>
                  <div class="each-graph">
                      
                  </div>
              </div>
          </div>

          <div class="detail-board">

          <?php
            $page_num = $_GET['pageNum'];
            //echo $page_num;
            include $_SERVER['DOCUMENT_ROOT']."/connect/db_conn.php";
            $sql = "SELECT * FROM SP_table WHERE SP_idx = $page_num";

            $detail_result = mysqli_query($dbConn, $sql);
            $detail_row = mysqli_fetch_array($detail_result);

            $detail_tit = $detail_row['SP_tit'];
            $detail_num = $detail_row['SP_idx'];
            $detail_cate = $detail_row['SP_cate'];
            $detail_con = $detail_row['SP_con'];
            $detail_reg = $detail_row['SP_reg'];
            // echo $detail_cate, $detail_num;
          ?>
            <form action="#">
            <div class="detail-title">
              <h2><?=$detail_tit?></h2>
              <input type="text" value="<?=$detail_tit?>" class="hidden-tit">
            </div>

            <div class="board-table detail-view">
              <ul>
                <li class="board-title">
                  <span>번호</span>
                  <span>분류</span>
                  <span>내용</span>
                  <span>등록일</span>
                </li>

                

                <li class="board-contents">
                  <span><?=$detail_num?></span>
                  <span><?=$detail_cate?></span>
                  <span>
                    <em><?=$detail_con?></em>
                    <textarea class="hidden-con"><?=$detail_con?></textarea>
                  </span>
                  <span><?=$detail_reg?></span>
                </li>

                </div>
              </ul>
            </div>
            <!-- end of board-table  -->
            <div class="send-update">
              <button type="submit">수정 입력</button>
            </div>
            </form>

            <div class="detail-btns">
              <button type="button">수정</button>
            </div>
            

            
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                  <span class="close" id="times">&times;</span>
                  <!-- <p>Some text in the Modal..</p> -->
                  <form action="/schedule/php/sp_rate_insert.php" class="rate-form" name="rate_form">
                      
                  </form>
                  <div class="updateBtnBox">
                  <button type="button" id="updateBtn">Update Rate</button>
                  </div>
              </div>
              
          </div>
        </section>
        </div>        
    </div>
    <script>
      const updateBrn = document.querySelector('#updateBtn');
      updateBtn.onclick = function(){
          //alert('abc');
          document.rate_form.submit();
          modal.style.display = "none";
                  }
              </script>
    <!-- Jquery Framework Load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- Plugins Load -->
    <script src="/schedule/lib/js/lightslider.js"></script>  
    <script src="/schedule/lib/js/jquery.easypiechart.min.js"></script>
    <!-- <script type="module" src="/schedule/js/app.js"></script> -->
    <!-- <script src="/schedule/js/glowparticle.js"></script> -->
    <!-- Vanilla JS Code Load  -->
    <script src="/schedule/js/index.js"></script>
    <!-- Jquery Code Load  -->
    <script src="/schedule/js/jquery.index.js"></script>
    <script src="/schedule/js/modalAjax.js"></script>
    <script src="/schedule/js/total.avg.js"></script>

</body>
</html>