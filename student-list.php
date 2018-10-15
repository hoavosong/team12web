<?php
require 'students.php';
$students = get_all_students();
disconnect_db();
?>
<title>Danh Sách Sinh Viên - 58HT</title>
<?php include_once 'admin-header.php'; ?>


      <div style="width:80%;margin-left:9.5%;margin-right:9.5%">
        <h1>Danh sách sinh viên</h1>
        <a href="student-add.php">Thêm sinh viên</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td style="color:red"><strong>ID</strong></td>
                <td style="color:red"><strong>Họ Và Tên</strong></td>
                <td style="color:red"<strong>Giới Tính</strong></td>
                <td style="color:red"><strong>Ngày Sinh</strong></td>
                <td style="color:red"><strong>Tùy Chọn</strong></td>
            </tr>
            <?php foreach ($students as $item){ ?>
            <tr>
                <td><?php echo $item['sv_id']; ?></td>
                <td><?php echo $item['sv_name']; ?></td>
                <td><?php echo $item['sv_sex']; ?></td>
                <td><?php echo $item['sv_birthday']; ?></td>
                <td>
                    <form method="post" action="student-delete.php">
                        <input onclick="window.location = 'student-edit.php?id=<?php echo $item['sv_id']; ?>'" type="button" value="Sửa"/>
                        <input type="hidden" name="id" value="<?php echo $item['sv_id']; ?>"/>
                        <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
      </div>
    </body>
</html>
