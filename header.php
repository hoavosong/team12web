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
        <li><a href="index.html"><b>Trang Chủ</b></a></li>
        <li><a href="index.html"><b>Menu2</b></a></li>
        <li><a href="index.html"><b>Menu3</b></a></li>
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
