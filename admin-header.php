
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
        <li style="margin-left:30px">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="background:rgb(96, 166, 114)"><strong>Danh Sách Sinh Viên
    <span class="caret"></span></strong></button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="menu" style="background:rgb(204, 130, 190)">
            <li role="presentation"><a role="menuitem" tabindex="1" href="student-list.php">Lớp 58HT</a></li>
          </ul>
      </li>




        <li style="margin-left: 85%;margin-top:-25px;"><a href="admin-logout.php"><b>Đăng Xuất</b></a></li>



      </ul>
</div>
