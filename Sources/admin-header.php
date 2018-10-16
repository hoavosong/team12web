
<?php
  session_start();


  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['admin_username']);
  	header("location: admin-login.php");
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
        <li><a href="admin-index.php"><b>Trang Chủ</b></a></li>
        <li style="margin-left:1.5%">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background:rgb(96, 166, 114)"><strong>Danh Sách Sinh Viên
    <span class="caret"></span></strong></button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="background:rgb(204, 130, 190)">
            <li role="presentation"><a role="menuitem" tabindex="1" href="student-list.php">Lớp 58HT</a></li>
          </ul>
      </li>
      <li style="margin-left:1.5%">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background:rgb(96, 166, 114)"><strong>Thống Kê Sinh Viên
  <span class="caret"></span></strong></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="background:rgb(204, 130, 190)">
          <li role="presentation"><a role="menuitem" tabindex="1" href="student-statistics.php">Lớp 58HT</a></li>
        </ul>
    </li>
      <li><a href="add-class.php"><b>Thêm khóa học</b></a></li>



        <li style="margin-left: 85%;margin-top:-25px;"><a href="admin-logout.php"><b>Đăng Xuất</b></a></li>



      </ul>
</div>
