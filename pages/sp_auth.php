<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1" />
<style>
  .wrap{width: 100%; height: 100vh; display:flex; align-items:center; justify-content:center;background:#f9f9f9;}
  form{margin-bottom: 10px;}
  .wrap form{width:100%; height:auto; display:flex; justify-content:center; flex-direction:column; align-items: center;}
  .wrap form input{width: 25%; outline:0; border-radius:20px; _border:1px soild #ccc; padding:10px; margin-bottom:20px; box-shadow:1px 1px 3px #333, 1px 1px 3px #fff}
  .wrap form button{background:#333; outline:0; border:1px soild #ccc; color:#fff; border-radius:20px; margin:0 1px; padding:10px 36px;}

  @media screen and (max-width:400px){
    .wrap form input{font-size:12px}
    .wrap form button{font-size:12px}
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