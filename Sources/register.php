<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng Ký Tài Khoản</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:rgba(164, 237, 206, 1)">
  <div class="header" style="background:rgba(164, 237, 206, 1)">
  	<h1 style="color:rgba(218, 17, 17, 0.86);margin-top:50px;font-size:50pt"><strong><center>*** Đăng Ký Thành Viên ***</center></strong></h1>
  </div>

  <form method="post" action="register.php" style="background:rgba(164, 237, 206, 1)">
  	<?php include('errors.php'); ?>
  	<div class="input-group" style="margin-top:100px ; margin-left:700px;" >
  	 <strong> <label>Tên Đăng Nhập :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
  	  <input type="text" name="username" value="<?php echo $username; ?>"style="height:35px;width:300px ;font-size:15px"  placeholder="Nhập tên đăng nhập">
  	</div>

  	<div class="input-group" style="margin-left:700px;margin-top:20px">
  	 <strong> <label>Địa Chỉ Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
  	  <input type="email" name="email" value="<?php echo $email; ?>"style="height:35px;width:300px ;font-size:15px" placeholder="Nhập địa chỉ Email">
  	</div>

  	<div class="input-group" style="margin-left:700px;margin-top:20px">
  	  <strong> <label>Mật Khẩu :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
  	  <input type="password" name="password_1" style="height:35px;width:300px ;font-size:15px" placeholder="Nhập Mật Khẩu">
  	</div>

  	<div class="input-group" style="margin-left:700px;margin-top:20px">
  	<strong>  <label>Xác Nhận Mật Khẩu :</label> </strong>
  	  <input type="password" name="password_2" style="height:35px;width:300px ;font-size:15px" placeholder="Nhập Lại Mật Khẩu">
  	</div>

  	<div class="input-group" style="margin-left:700px;margin-top:20px">
  	 <strong> <button type="submit" class="btn" name="reg_user" style="margin-top:20px;font-size:15pt;margin-left:150px">Hoàn Thành Đăng Ký</button> </strong>
  	</div>

  	<strong><p style="margin-left:700px;margin-top:60px;font-size:17pt">
  	Bạn đã có tài khoản ? <a href="login.php"> Đăng Nhập  </a>
  </p></strong>
  </form>
</body>
</html>
