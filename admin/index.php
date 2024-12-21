<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="tr">
  <?php
 $page = isset($_GET['p']) ? htmlspecialchars(string: $_GET['p']): 'dashboard';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP PDO || Admin Panel </title>

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- style --> 
  <link rel="stylesheet"  href="style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php
  include_once "navbar.php";
  include_once "sidebar.php";
  include_once "content.php";
  include_once "controlsidebar.php";
  include_once "jquery.php";
  include_once "footer.php";
  ?>

  <div class="container">
    <?php
  if($_GET){
    print_r($_GET);
  }
 ?>
 </div>

 </body>
</html>


