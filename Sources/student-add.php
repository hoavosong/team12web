<?php

require 'students.php';

// Nếu người dùng submit form
if (!empty($_POST['add_student']))
{
    // Lay data
    $data['sv_name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['sv_sex']         = isset($_POST['sex']) ? $_POST['sex'] : '';
    $data['sv_birthday']    = isset($_POST['birthday']) ? $_POST['birthday'] : '';

    // Validate thong tin
    $errors = array();
    if (empty($data['sv_name'])){
        $errors['sv_name'] = 'Chưa nhập tên sinh viên';
    }

    if (empty($data['sv_sex'])){
        $errors['sv_sex'] = 'Chưa nhập giới tính sinh viên';
    }

    // Neu ko co loi thi insert
    if (!$errors){
        add_student($data['sv_name'], $data['sv_sex'], $data['sv_birthday']);
        // Trở về trang danh sách
        header("location: student-list.php");
    }
}

disconnect_db();
?>

<title>Thêm Sinh Viên - 58HT</title>
<?php include_once 'admin-header.php'; ?>

<center>
  <h1 style="font-size:30pt;color:rgb(128, 39, 241)">Thêm sinh viên lớp 58HT</h1>
</center>
<div style="margin-left:30%">


  <a href="student-list.php" style="font-size:20pt">Trở về</a> <br /> <br />
  <form method="post" action="student-add.php">
    <table width="50%" border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Họ Và Tên</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="name" value="<?php echo !empty($data['sv_name']) ? $data['sv_name'] : ''; ?>" />
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
            <option value="Nữ" <?php if (!empty($data['sv_sex']) && $data['sv_sex']=='Nữ' ) echo 'selected' ; ?>>Nữ</option>
          </select>
          <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
        </td>
      </tr>
      <tr>
        <td style="height:50px;color:rgb(238, 19, 65)"><strong>
            <center>Ngày Sinh</center>
          </strong></td>
        <td>
          <input style="height:50px;width:100%" type="text" name="birthday" value="<?php echo !empty($data['sv_birthday']) ? $data['sv_birthday'] : ''; ?>" />
        </td>
      </tr>
      <tr>
        <td></td>
        <td style="height:50px">
          <input style="height:50px;width:100%" type="submit" name="add_student" value="Lưu" />
        </td>
      </tr>
    </table>
  </form>
</div>
<?php include_once 'admin-footer.php'; ?>
