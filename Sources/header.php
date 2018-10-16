<?php
  session_start();


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
<head>
  <title>
    <?php echo $title; ?>
  </title>

  <link rel="stylesheet" type="text/css"  href="style.css">
  <link rel="stylesheet" type="text/css"  href="bootstrap.min.css">
</head>
  <body>
    <div id="menu">
      <ul>
        <li><a href="index.php"><b>Trang Chủ</b></a></li>
        <li style="margin-left:1.5%">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background:rgb(96, 166, 114)"><strong>Danh Sách Sinh Viên
    <span class="caret"></span></strong></button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="background:rgb(204, 130, 190)">
            <li role="presentation"><a role="menuitem" tabindex="1" href="user-student-list.php">Lớp 58HT</a></li>
          </ul>
      </li>
      <li style="margin-left:1.5%">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background:rgb(96, 166, 114)"><strong>Thống Kê Sinh Viên
  <span class="caret"></span></strong></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="background:rgb(204, 130, 190)">
          <li role="presentation"><a role="menuitem" tabindex="1" href="user-student-statistics.php">Lớp 58HT</a></li>
        </ul>
    </li>
      <li>
       <div id="info" style=" margin-left:1600px">
        <?php  if (isset($_SESSION['username'])) : ?>
          <p style="color:black">Xin Chào:  <strong><?php echo $_SESSION['username']; ?></strong></p>
          <p> <a href="index.php?logout='1'" style="color: rgb(210, 49, 20);"><strong>Đăng Xuất</strong></a> </p>
        <?php endif ?>
      </div>
    </li>
      </ul>
  </div>
