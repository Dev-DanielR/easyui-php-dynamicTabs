<?php include 'middlewares/themeSelector.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login 2</title>
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
      overflow: hidden;
    }
    #background {
      height: 100vh;
      width: 100vw;
      position: absolute;
      z-index: -1;
      background-image: url("assets/custom/images/rustic.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position-x: center;
      background-position-y: bottom;
      filter: opacity(0.35);
    }
    #form-container {
      width: 40%;
      max-width: 500px;
      border-radius: 15px;
      margin-bottom: 50px;
    }
    #form-header {
      display: grid;
      height: 64px;
      grid-template-columns: 1fr 64px 1fr;
      grid-template-rows: 64px;
      padding: 0;
      border-top-right-radius: 15px;
      border-top-left-radius: 15px;
    }
    #logo-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: #fff;
      height: 64px;
      padding-left: 25px;
    }
    #logo-transition {
      border-left: 32px solid #fff;
      border-right: 32px solid transparent;
      border-bottom: 32px solid transparent;
      border-top: 32px solid #fff;
      display: inline-block;
    }
    #form-title {
      display: flex;
      justify-content: flex-end;
      padding-right: 25px;
    }
    #form-content {
      padding: 25px;
      border-bottom-right-radius: 15px;
      border-bottom-left-radius: 15px;
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
<body class="panel-body">
  <span id="background"></span>
  <div id="form-container" class="easyui-panel">
    <div id="form-header" class="tabs-header">
      <span id="logo-container">
        <img id="logo" src="custom/images/logo.png" style="height: 60px; width: 127px;"></img>
      </span>
      <span id="logo-transition"></span>
      <span id="form-title"><h1>Login</h1></span>
    </div>
    <div id="form-content" class="easyui-panel">
      <p style="margin-top: 0;">Fill the following data to login to the site:</p>
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

  </div>

  <!--Script-->
  <script src="assets/easyui/jquery.min.js"></script>
  <script src="assets/easyui/jquery.easyui.min.js"></script>
</body>
</html>