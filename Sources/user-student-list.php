<?php
require 'students.php';
$students = get_all_students();
disconnect_db();
?>
<title>Danh Sách Sinh Viên - 58HT</title>
<?php include_once 'header.php'; ?>


      <div style="width:50%;margin-left:24.5%;margin-right:24.5%">
        <strong><center><h1 style="font-size:35pt;color:red">Danh sách sinh viên</h1></center></strong>
        <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td style="color:red"><strong>ID</strong></td>
                <td style="color:red"><strong>Họ Và Tên</strong></td>
                <td style="color:red"><strong>Giới Tính</strong></td>
                <td style="color:red"><strong>Ngày Sinh</strong></td>

            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['sv_id']; ?></td>
                <td><?php echo $item['sv_name']; ?></td>
                <td><?php echo $item['sv_sex']; ?></td>
                <td><?php echo $item['sv_birthday']; ?></td>
            </tr>
            <?php } ?>
        </table>
      </div>

      <div style="margin-bottom:5%">

      </div>
<?php include_once 'footer.php' ?>
