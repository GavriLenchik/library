<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .container{
            background: #ffffff;
            border-radius: 100px;
            margin-top: 100px;
            width: 600px!important;
            border: 4px #853938 solid;
            text-align: center;
        }
        body{
            width: 600px!important;
            border-radius: 100px;
            margin-left: 200px;
            display: inline;
        }
        html{
            background-image: url("https://itc.ua/wp-content/uploads/2019/10/shutterstock_1068141515-770x462.jpg");
            background-size: 100% ;
        }
        .log-btn{
            margin-bottom: 30px;
            margin-left: 30px;
            width: 300px;
            height: 50px;
            border: 2px solid #545466;
            border-radius: 40px;
        }
        .reg-btn{
            margin-bottom: 0px;
            margin-left: 0px;
            margin-top: 20px;
            width: 300px;
            height: 50px;
            border: 2px solid #545466;
            border-radius: 40px;
        }
        form{
            width: 412px;
            margin-top: 35px;
            margin-bottom: 35px;
            background-color: #c4514f;;
            padding: 30px;
            display: inline-block;
            border-radius: 40px;
        }
        .input-group{
            border-radius: 40px;
        }
        .col{
            margin-left: 10px;
        }
    </style>
<!--  <link rel="stylesheet" href="register.css">-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col-lg-1 col"></div>
    <div class="col-lg-8 col">
      <h1 class="text-center reg">Авторизація</h1>
      <form method="post" action="/api/log"class="form-horizontal">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="login" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon2">
        </div>
          <button type="submit"  class="reg-btn btn btn-success">Увійти</button>

      </form>
      <button type="button" onclick="window.location.href = '/register'" class="log-btn btn btn-primary">В мене немає аккаунту</button>

    </div>
    <div class="col-lg-1 col "></div>

  </div>
</div>

</div>

</body>
</html>
