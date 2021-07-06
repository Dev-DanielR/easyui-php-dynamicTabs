<?php include 'middlewares/themeSelector.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EasyUI - Dynamic Tabs</title>
  <link rel="stylesheet" href="assets/easyui/themes/<?= $theme ?>/easyui.css">
  <link rel="stylesheet" href="assets/easyui/themes/icon.css">
  <link rel="stylesheet" href="assets/custom/index.css">
</head>
<body class="easyui-layout" data-options="fit:true">

  <!---Header-->
  <div class="panel-noscroll" data-options="region:'north'" style="padding: 0 18px; margin-bottom: -1px; display: flex; justify-content: space-between; align-items: center;">
    <h2>EasyUI - Dynamic Tabs</h2>
    <form id="theme-form">
      <input id="cb-theme" name="theme" value="<?= $theme ?>">
    </form>
  </div>

  <!--Content-->
  <div id="content" data-options="region:'center'" class="easyui-layout easyui-fluid">

    <!--Tab menu-->
    <div id="dt-menu" class="easyui-panel" style="padding:5px; width: 100%;">
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('google-tab')">Google</a>
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('bing-tab')">Bing</a>
      <a href="#" class="easyui-linkbutton" data-options="plain: true" onclick="addTab('ddg-tab')">Duckduckgo</a>
    </div>

    <!--Tab panel-->
    <div id="dt-panel" class="easyui-tabs" style="width:100%; height:100%;"></div>

  </div>

  <!--Script-->
  <script src="assets/easyui/jquery.min.js"></script>
  <script src="assets/easyui/jquery.easyui.min.js"></script>
  <script src="assets/custom/index.js"></script>
</body>
</html>