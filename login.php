<?php include 'middlewares/themeSelector.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/easyui/themes/<?= $theme ?>/easyui.css">
  <link rel="stylesheet" href="assets/easyui/themes/icon.css">
  <link rel="stylesheet" href="assets/custom/index.css">
  <style>
    body {
      margin: 0px;
      height: 100vh;
      width: 100vw;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: center;
      background-image: url("custom/images/rustic.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position-x: center;
      background-position-y: bottom;
      overflow: hidden;
    }
    #tint {
      height: 100vh;
      width: 100vw;
      position: absolute;
      z-index: -1;
      filter: opacity(0.2);
    }
    #form-container {
      padding: 25px;
      width: 40%;
      max-width: 500px;
      border-radius: 15px;
      margin-bottom: 50px;
    }
  
    @media only screen and (max-height: 450px) {
      body {
        justify-content: center;
      }
      #form-container {
        margin-bottom: 0px;
      }
    }
  </style>
</head>
<body>

  <!--Tint-->
  <span id="tint" class="panel-body"></span>
  <div id="form-container" class="easyui-panel">
    <h1>Login</h1>
    <p>Fill the following data to login to the site: </p>
  
    <!--Login Form-->
    <form id="login-form" method="post">
      <div style="margin-bottom:20px">
        <input
            class="easyui-textbox"
            name="username"
            style="width:100%"
            data-options="prompt: 'Enter username', required:'true', iconCls:'icon-man'">
      </div>
      <div style="margin-bottom:20px">
        <input
            class="easyui-passwordbox"
            name="password"
            style="width:100%"
            data-options="prompt: 'Enter password', required:'true', iconCls:'icon-lock'">
      </div>
      <div style="margin-bottom:20px">
        <input
            class="easyui-checkbox"
            type="checkbox"
            name="rememberMe"> <span>Remember me</span>
      </div>
      <div style="text-align: center; padding: 5px 0;">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="sendForm()" style="width:80px">Login</a>
      </div>
    </form>

  </div>

  <!--Script-->
  <script src="assets/easyui/jquery.min.js"></script>
  <script src="assets/easyui/jquery.easyui.min.js"></script>
</body>
</html>