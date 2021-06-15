<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <div class="board-btns">
              <a href="?key=all" class="active">All</a>
              <a href="?key=database">Database</a>
              <a href="?key=api">API</a>
              <a href="?key=renewal">Renewal</a>
              <a href="?key=planning">Planning</a>
            </div>
            <div class="board-table">
              <ul>
                <li class="board-title">
                  <span>번호</span>
                  <span>분류</span>
                  <span>제목</span>
                  <span>등록일</span>
                  <span>삭제</span>
                </li>

                <?php
                $tab_path = $_GET['key'];
                   include $_SERVER["DOCUMENT_ROOT"].'/schedule/include/tabs/'.$tab_path.'.php';
                   //php의 마침표는 js의 +
                  ?>

                <div class="board-table-btns">
                  <!-- <form action="#" class="search-box">
                  <select name="" id="">
                    <option value="">아이디</option>
                    <option value="">제목</option>
                  </select>
                  <input type="text">
                  <button type="submit"><i class="fa fa-search"></i></button>
                  </form> -->
                  <button type="button" class="more-btn">더보기</button>
                </div>
              </ul>
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

    <script>
      $(function(){
        //더보기 버튼 기능
        $(".board-contents").hide();
        $(".board-contents").slice(0,5).show();

        $(".more-btn").click(function(){
          $(".board-contents:hidden").slice(0,5).show();
          
        });

        //테이블 탭 활성화 기능
        
      });
    </script>

</body>
</html>