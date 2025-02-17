<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-image: url(images/tasty-image.png);
      background-size: cover;
    }
    .box {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      padding: 40px;
      background: rgba(0, 0, 0, 0.6);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }
    .box h2 {
      margin: 0 0 30px;
      padding: 0px;
      color: #fff;
      text-align: center;
    }
    .box .input-box {
      position: relative;
    }
    .box .input-box input {
      width: 100%;
      padding: 10px 0px;
      font-size: 16px;
      color: #fff;
      letter-spacing: 1px;
      margin-bottom: 30px;
      border: none;
      outline: none;
      background: transparent;
      border-bottom: 1px solid #fff;
    }
    .box .input-box label {
      position: absolute;
      top: 0;
      left: 0;
      letter-spacing: 1px;
      padding: 10px 0px;
      font-size: 16px;
      color: #fff;
      transition: .5s;
    }
    .box .input-box input:focus ~ label,
    .box .input-box input:valid ~ label {
      top: -18px;
      left: 0px;
      color: #03a9f4;
      font-size: 12px;
    }
    .box input[type="submit"] {
      background: transparent;
      border: none;
      outline: none;
      color: #fff;
      background: #227be3;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .box input[type="submit"]:hover {
      background-color: #3067b9;
    }
  </style>
  <title>Login</title>
</head>
<body>
<div class="box">

    <form method="post" action="">
    <h2>Parola gresita!
    <br>
</br>
    <div class="d-flex">
            <a href="login.php" class="text-uppercase custom_orange-btn mr-3">
                Inapoi
            </a>
        </div>
    </h2>
    </form>

</div>
</body>
</html>
