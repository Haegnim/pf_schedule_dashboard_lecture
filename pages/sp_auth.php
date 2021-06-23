<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
<style>
  .wrap{width: 100%; height: 100vh; display:flex; align-items:center; justify-content:center;background: #ebecf0;}
  form{margin-bottom: 10px;}
  .wrap form{width:100%; height:auto; display:flex; justify-content:center; flex-direction:column; align-items: center;}
  .wrap form input{background: #ebecf0; width: 25%; outline:0; border-radius:25px; border:none; padding:13px; margin-bottom:20px; box-shadow: inset 3px 3px 5px #babecc, inset -3px -3px 5px #fff; transition: all 0.4s; text-align:center}
  .wrap form input:hover{ box-shadow: inset 1px 1px 3px #babecc, inset -1px -1px 3px #fff; color:#0078FF}
  .wrap form input:focus{background: #fff; box-shadow: inset 1px 1px 3px #babecc, inset -1px -1px 3px #fff; color:#0078FF}


  .wrap form button{background: #ebecf0; outline:0; border:none; color:#000; border-radius:25px; margin:0 1px; padding:10px 36px;box-shadow: 5px 5px 12px #babecc, -5px -5px 12px #fff; transition: all 0.4s}
  .wrap form button:hover{
    color:#0078FF;
    box-shadow: 3px 3px 5px #babecc, -3px -3px 5px #fff;
  }
  .wrap form button:focus{
    color:#0078FF;
    box-shadow: inset 3px 3px 5px #babecc, inset -3px -3px 5px #fff
  }
  @media screen and (max-width: 1200px) {
    .wrap form input{width: 40%;}
  }

  @media screen and (max-width:400px){
    .wrap form input{font-size:12px}
    .wrap form button{font-size:12px}
    .wrap form input{width: 60%;}
  }
  }
</style>
  <title>Auth Page</title>
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/schedule/css/reset.css?">
</head>
<body>
  <div class="wrap">
  <form action="/schedule/php/auth.php" method="post" name="auth_form">
    <input type="password" placeholder="인증코드를 입력해 주세요." name="auth_code">
    <button type="button">인증하기</button>
  </form>
  </div>

  <script>
    const authCode = document.querySelector('button');

    authCode.addEventListener('click',sendAuth);
    document.addEventListener('keydown',function(e){
      const keyCode = e.keyCode;
     //console.log(keyCode);
     if(keyCode === 13){
       sendAuth();
     }
    });

    function sendAuth(){
      if(!document.auth_form.auth_code.value){
        alert('인증코드를 입력해 주세요!');
        return;
      }
      document.auth_form.submit();
    }
  </script>

</body>
</html>