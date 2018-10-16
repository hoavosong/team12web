<?php

require 'students.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id){
    $data = get_student($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data){
   header("location: student-statistics.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_student_statistics']))
{
    // Lay data
    $data['sv_name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['sv_sex']         = isset($_POST['sex']) ? $_POST['sex'] : '';
    $data['sv_birthday']    = isset($_POST['birthday']) ? $_POST['birthday'] : '';
    $data['sv_id']          = isset($_POST['id']) ? $_POST['id'] : '';
    $data['sv_diem1']    = isset($_POST['diem1']) ? $_POST['diem1'] : '';
    $data['sv_diem2']    = isset($_POST['diem2']) ? $_POST['diem2'] : '';
    $data['sv_diemtong']    = isset($_POST['diemtong']) ? $_POST['diemtong'] : '';
    $data['sv_xeploai']    = isset($_POST['xeploai']) ? $_POST['xeploai'] : '';

    // Validate thong tin
    $errors = array();
    if (empty($data['sv_name'])){
        $errors['sv_name'] = 'Chưa nhập tên sinh vien';
    }

    if (empty($data['sv_sex'])){
        $errors['sv_sex'] = 'Chưa nhập giới tính sinh vien';
    }

    // Neu ko co loi thi insert
    if (!$errors){
        edit_student_statistics($data['sv_id'], $data['sv_name'], $data['sv_sex'], $data['sv_birthday'], $data['sv_diem1'], $data['sv_diem2'], $data['sv_diemtong'], $data['sv_xeploai']);
        // Trở về trang danh sách
        header("location: student-statistics.php");
    }
}

disconnect_db();
?>

<title>Sửa Thống Kê Sinh Viên - 58HT</title>
<?php include_once 'admin-header.php'; ?>

<center>
  <h1 style="font-size:35pt;color:red">Sửa sinh viên </h1>
</center>
<div style="margin-left:30%">
  <a href="student-statistics.php" style="font-size:20pt">Trở về</a> <br /> <br />
  <form method="post" action="student-statistics-edit.php?id=<?php echo $data['sv_id']; ?>">
    <table width="50%" border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Họ Và Tên</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="name" value="<?php echo $data['sv_name']; ?>" />
          <?php if (!empty($errors['sv_name'])) echo $errors['sv_name']; ?>
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Giới Tính</center>
          </strong></td>
        <td>
          <select name="sex">
            <option value="Nam">Nam</option>
            <option value="Nữ" <?php if ($data['sv_sex']=='Nữ' ) echo 'selected' ; ?>>Nữ</option>
          </select>
          <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Ngày Sinh</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="birthday" value="<?php echo $data['sv_birthday']; ?>" />
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Điêm số 1</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="diem1" value="<?php echo $data['sv_diem1']; ?>" />
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Điểm số 2</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="diem2" value="<?php echo $data['sv_diem2']; ?>" />
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Điểm Tổng</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="diemtong" value="<?php echo $data['sv_diemtong']; ?>" />
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Xếp Loại</center>
          </strong></td>
        <td>
          <select name="xeploai">
            <option value="Giỏi">Giỏi</option>
            <option value="Khá">Khá</option>
            <option value="Trung Bình">Trung Bình</option>
            <option value="Yếu" <?php if ($data['sv_xeploai']=='Yếu' ) echo 'selected' ; ?>>Yếu</option>
          </select>
          <?php if (!empty($errors['sv_xeploai'])) echo $errors['sv_xeploai']; ?>
        </td>
      </tr>




      <tr>
        <td></td>
        <td>
          <input type="hidden" name="id" value="<?php echo $data['sv_id']; ?>" />
          <input style="height:50px;width:100%" type="submit" name="edit_student_statistics" value="Lưu" />
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include_once 'admin-footer.php'; ?>
