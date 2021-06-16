<header>
    <h2><a href="/schedule/index.php"><i class="custom-font logo"></i></a></h2>
    <ul class="gnb" id="gnbA">
        <li class="active">
            <a href="/schedule/index.php"><i class="custom-font logo2"></i>
            </a>
            <span class="nav-top"></span>
            
            <!-- <span class="nav-mid"></span>
            <span class="nav-effect"></span>
            <span class="nav-bottom"></span> -->
            
            
        </li>
        <li>
            <a href="/schedule/pages/sp_insert_form.php">
            
            <i class="fa fa-pencil"></i></a>
            <span class="nav-top">
                
            </span>
            
        </svg>
            
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
    <svg id="svg" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"> <defs>
            <clipPath id="path" clipPathUnits="objectBoundingBox">
                <path d="M40,.07A8.7,8.7,0,0,1,31.43,8.6H15.93a11.56,11.56,0,0,0,0,23.12H31.4C36,31.82,40,35.47,40,40Z"/>
            </clipPath>
            </defs>
            </svg>
    <div type ="button" id ="btn" onclick = "bgBtn();">
<span></span></div>
    <a href="#" class="sign-out"><i class="fa fa-sign-out"></i></a>
    
    <div class="mobile-menu">
        <span></span>
        <span></span>
    </div>
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

        for(let i = 0; i < tabBtns.length; i++){
          tabBtns[i].classList.remove('active');
          if(pathName2.includes(tabElements2[i])){
            tabBtns[i].classList.add('active');
          }
        }
    }
    abc();
        </script>