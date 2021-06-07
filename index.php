<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="/schedule/css/Media.css">

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
            <section class="graph-ui">
                <div class="intro">
                    <div class="slide-box">
                        <h2>Database Project Process</h2>
                        <p>데이터베이스 테이블 설계 완료.<br>테이블 UI 디자인 완료</p>
                        <a href="#">More Details</a>
                        <i class="fa fa-database"></i>
                    </div>
                    <div class="slide-box">
                        <h2>Database Project Process</h2>
                        <p>API 테이블 설계 완료.<br>테이블 UI 디자인 완료</p>
                        <a href="#">More Details</a>
                        <i class="fa fa-database"></i>
                    </div>
                    <div class="slide-box">
                        <h2>Database Project Process</h2>
                        <p>리뉴얼 테이블 설계 완료.<br>테이블 UI 디자인 완료</p>
                        <a href="#">More Details</a>
                        <i class="fa fa-database"></i>
                    </div>
                    <div class="slide-box">
                        <h2>Database Project Process</h2>
                        <p>기획 테이블 설계 완료.<br>테이블 UI 디자인 완료</p>
                        <a href="#">More Details</a>
                        <i class="fa fa-database"></i>
                    </div>
                    
                </div>
                <div class="each-pofol">
                    <div>
                        <div class="each-title">
                            <h3>Each Portfolio Process Rate</h3>
                        </div>
                        <div class="each-graph">
                            <div class="db-pofol">
                                <span class="chart" data-percent="86">
                                    <span class="percent"></span>
                                    <i class="fa fa-database"></i>
                                </span>
                                <b>DB Project</b>
                                
                            </div>
                            <div class="api-pofol">
                                <span class="chart" data-percent="86">
                                    <span class="percent"></span>
                                    <i class="fa fa-thermometer-half"></i>
                                </span>
                                <b>API Project</b>
                                
                            </div>
                            <div class="renewal-pofol">
                                <span class="chart" data-percent="86">
                                    <span class="percent"></span>
                                    <i class="fa fa-clone"></i>
                                </span>
                                <b>Renewal Project</b>
                                
                            </div>
                            <div class="panning-pofol">
                                <span class="chart" data-percent="86">
                                    <span class="percent"></span>
                                    <i class="fa fa-bar-chart-o"></i>
                                </span>
                                <b>Planning Project</b>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include $_SERVER['DOCUMENT_ROOT']."/schedule/include/total_pofol.php";
                 ?>

            </section>

             <!-- table contents on right side  -->
             <?php
                include $_SERVER['DOCUMENT_ROOT']."/schedule/include/table_ui.php";
             ?>

        </div>
        <!-- End of Main Dashboard Frame  -->

    </div>

    <!-- Jquery Framework Load -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- Plugins Load -->
    <script src="/schedule/lib/js/lightslider.js"></script>  
    <script src="/schedule/lib/js/easypiechart.js"></script>
    <!-- Vanilla JS Code Load  -->
    <script src="/schedule/js/index.js"></script>
    <!-- Jquery Code Load  -->
    <script src="/schedule/js/jquery.index.js"></script>

</body>
</html>