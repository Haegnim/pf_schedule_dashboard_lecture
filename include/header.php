<?php
  session_start();
  if(isset($_SESSION['usercode'])){
      $authcode = $_SESSION['usercode'];
  }else{
    echo"
    <script>
        location.href='/schedule/pages/sp_auth.php'
    </script>
    ";
      }

?>

<header>
    <h2><a href="/schedule/index.php"><i class="custom-font logo"></i></a></h2>
    <ul class="gnb" id="gnbA">
        <li class="active" >
            <a href="/schedule/index.php"><i class="custom-font logo2"></i>
            </a>
            <span class="nav-top" viewBox="0 0 80 80"></span>    
            <!-- <span class="nav-mid"></span>
            <span class="nav-effect"></span>
            <span class="nav-bottom"></span> -->  
        </li>
        <li>
            <a href="/schedule/pages/sp_insert_form.php">
            <i class="fa fa-pencil"></i></a>
            <span class="nav-top">
            </span>
            
            <!-- <span class="nav-mid"></span>
            <span class="nav-effect"></span> -->
            
            <!-- <span class="nav-bottom"></span> -->
        </li>
        <li>
            <a href="/schedule/pages/sp_detail_form.php?key=all">
            <i class="fa fa-search"></i></a>
            <span class="nav-top" ></span>
            <!-- <span class="nav-mid"></span>
            <span class="nav-effect"></span> -->

            <!-- <span class="nav-bottom"></span> -->
        </li>
    </ul>
    
    <div type ="button" id ="btn" onclick = "bgBtn();">
        <span></span>
    </div>
    <a href="/schedule/php/sign_out.php" class="sign-out"><i class="fa fa-sign-out"></i></a>
    
    <div class="mobile-menu">
        <span></span>
        <span></span>
    </div>
    <ul class="mobile-meun-items">
        <li><a href="/schedule/index.php"><i class="custom-font logo2"></i></a></li>
        <li><a href="/schedule/pages/sp_insert_form.php"><i class="fa fa-pencil"></i></a></li>
        <li><a href="/schedule/pages/sp_detail_form.php?key=all"><i class="fa fa-search"></i></a></li>
        <li><a href="/schedule/php/sign_out.php"><i class="fa fa-sign-out"></i></a></li>
    </ul>
</header>
<script>
    function abc(){
        const pathName2 = window.location.href;
        const tabBtns = document.querySelectorAll('.gnb li');
        const tabElements2 = ['index','sp_insert_form', 'sp_detail_form'];

        console.log(tabBtns);

        // tabBtns.forEach(btn =>{
        //   btn.classList.remove('active');
        // });

        for(let i = 0; i <script tabBtns.length; i++){
          tabBtns[i].classList.remove('active');
          if(pathName2.includes(tabElements2[i])){
            tabBtns[i].classList.add('active');
          }
        }
    }
    abc();
        </script>