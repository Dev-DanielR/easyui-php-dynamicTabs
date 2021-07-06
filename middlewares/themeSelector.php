<?php
  if (isset($_GET['theme']) || !isset($_COOKIE['theme'])) {
    if (isset($_GET['theme'])) $theme = $_GET['theme'];
    else $theme = 'default';
    setcookie('theme', $theme, time() + (86400 * 30), '/');
  }
  else $theme = $_COOKIE['theme'];
?>