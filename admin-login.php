


<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng Nhập</title>
  </head>
  <body style="background:rgba(164, 237, 206, 1)">
     <?php include('admin-server.php') ?>
      <form method="post" action="admin-login.php" style="background:rgba(164, 237, 206, 0.57);height:500px">
      	<?php include('errors.php'); ?>
        <center><h1 style="font-size:35pt;color:rgb(38, 177, 228)"> <b>***Chào Mừng Tới Với Website***</b></h1></center>
        <center><h1 style="color:rgba(208, 33, 33, 0.78)"> Bạn Cần Đăng Nhập Để Tiếp Tục Truy Cập Trang Admin </h1></center>
    <div style="margin-top:100px ; margin-left:750px" >
      	<div class="input-group" style="height:100px">
      		<label style="font-size:15pt"><strong>Tài Khoản :</strong></label>
      		<input type="text" name="admin_username" style="height:35px;width:300px ;font-size:15px" placeholder="Nhập tài khoản">
      	</div>
      	<div class="input-group" style="height:100px">
      		<label style="font-size:15pt"><strong>Mật Khẩu :  </strong></label>
      		<input type="password" name="admin_password" style="height:35px;width:300px ;font-size:15px" placeholder="Nhập mật khẩu">
      	</div>
      	<div class="input-group" style="margin-left:180px">
      		<button type="submit" class="btn" name="admin_login_user" style="font-size:15pt">Đăng Nhập</button>
      	</div>



    </div>
      </form>
  </body>
</html>
