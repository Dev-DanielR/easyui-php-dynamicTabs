<?php include 'middlewares/themeSelector.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login 3</title>
  <link rel="stylesheet" href="assets/easyui/themes/<?= $theme ?>/easyui.css">
  <link rel="stylesheet" href="assets/easyui/themes/icon.css">
  <link rel="stylesheet" href="assets/custom/index.css">
  <style>
    body {
      margin: 0px;
      height: 100vh;
      width: 100vw;
      display: grid;
    }
    #background {
      height: 100vh;
      width: 100vw;
      position: absolute;
      z-index: -1;
      background-size: cover;
      background-repeat: no-repeat;
      filter: opacity(0.35);
    }
    #form-container {
      padding: 25px;
      min-width: 300px;
      width: 40%;
      max-width: 500px;
    }
    #form-layout {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #form-header{
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 25px;
    }
    #form-title {
      position: relative;
      bottom: -4px;
      margin: 0px;
    }
  
    @media only screen and (orientation: portrait) {
      body {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
      }
      #background {
        background-image: url("custom/images/apple-portrait.jpg");
        background-position-x: center;
        background-position-y: center;
      }
      #form-layout {
        grid-row: 2;
        grid-column: 1;
      }
    }
    @media only screen and (orientation: landscape) {
      body {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
      }
      #background {
        background-image: url("custom/images/apple.jpg");
        background-position-x: center;
        background-position-y: bottom;
      }
      #form-layout {
        grid-row: 1;
        grid-column: 1;
      }
    }
  </style>
</head>
<body class="panel-body" style="overflow: hidden;">
  <span id="background"></span>
  <span id="form-layout">
    <div id="form-container" class="easyui-fluid">
      <div id="form-header">
        <img src="custom/images/logo-square.png">
        <h1 id="form-title">Login</h1>
      </div>

      <!--Login Form-->
      <form id="login-form" method="post">
        <div style="margin-bottom: 25px">
          <input
              class="easyui-textbox"
              name="username"
              style="width:100%"
              data-options="prompt: 'Enter username', required:'true', iconCls:'icon-man'">
        </div>
        <div style="margin-bottom: 25px">
          <input
              class="easyui-passwordbox"
              name="password"
              style="width:100%"
              data-options="prompt: 'Enter password', required:'true', iconCls:'icon-lock'">
        </div>
        <div style="margin-bottom: 25px">
          <input
              class="easyui-checkbox"
              type="checkbox"
              name="rememberMe"> <span>Remember me</span>
        </div>
        <div style="text-align: center; padding: 5px 0;">
          <a href="javascript:void(0)" class="easyui-linkbutton" onclick="sendForm()" style="width:80px">Login</a>
        </div>
      </form>
  </span>

  </div>

  <!--Script-->
  <script src="assets/easyui/jquery.min.js"></script>
  <script src="assets/easyui/jquery.easyui.min.js"></script>
</body>
</html>