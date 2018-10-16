<?php
// initializing variables
$admin_username = "";
$admin_email    = "";
$errors = array();
$DBName = "register";
global $db;
$db = mysqli_connect('localhost', 'root', '', 'register');
// connect to the database
function connect_db()
{
    // Gọi tới biến toàn cục $conn
    global $db;

    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$db){
        $db = mysqli_connect('localhost', 'root', '', 'register') or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($db, 'utf8');
    }
}

// REGISTER USER
if (isset($_POST['admin_reg_user'])) {
  // receive all input values from the form
  $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $admin_email = mysqli_real_escape_string($db, $_POST['admin_email']);
  $admin_password_1 = mysqli_real_escape_string($db, $_POST['admin_password_1']);
  $admin_password_2 = mysqli_real_escape_string($db, $_POST['admin_password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($admin_username)) { array_push($errors, "*Bạn Cần Nhập Tài Khoản "); }
  if (empty($admin_email)) { array_push($errors, "*Vui Lòng Điền Địa Chỉ Email"); }
  if (empty($admin_password_1)) { array_push($errors, "*Bạn Cần Nhập Mật Khẩu"); }
  if ($admin_password_1 != $admin_password_2) {
	array_push($errors, "*Mật Khẩu Và Mật Khẩu Xác Nhận Không Trùng Khớp , Vui Lòng Thử Lại !");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE username='$admin_username' OR email='$admin_email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['admin_username'] === $admin_username) {
      array_push($errors, "*Tài Khoản Đã Được Sử Dụng , Vui Lòng Thử Tài Khoản Khác !");
    }

    if ($user['admin_email'] === $admin_email) {
      array_push($errors, "*Email Đã Được Sử Dụng, Vui Lòng Thử Email Khác !");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$admin_password = md5($admin_password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (admin_username, admin_email, admin_password)
  			  VALUES('$admin_username', '$admin_email', '$admin_password')";
  	mysqli_query($db, $query);
  	$_SESSION['admin_username'] = $admin_username;
  	$_SESSION['admin_success'] = "Bạn Đã Đăng Nhập";
  	header('location: admin-index.php');
  }
}
if (isset($_POST['admin_login_user'])) {
  $admin_username = mysqli_real_escape_string($db, $_POST['admin_username']);
  $admin_password = mysqli_real_escape_string($db, $_POST['admin_password']);

  if (empty($admin_username)) {
  	array_push($errors, "*Tài Khoản Là Bắt Buộc");
  }
  if (empty($admin_password)) {
  	array_push($errors, "*Mật Khẩu Không Được Bỏ Trống");
  }

  if (count($errors) == 0) {
  	$admin_password = md5($admin_password);
  	$query = "SELECT * FROM admin WHERE admin_username='$admin_username' AND admin_password='$admin_password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_username'] = $admin_username;
  	  header('location: admin-index.php');
  	}else {
  		array_push($errors, "*** Tài Khoản / Mật Khẩu Sai , Vui Lòng Đăng Nhập Lại !");
  	}
  }
}
?>
