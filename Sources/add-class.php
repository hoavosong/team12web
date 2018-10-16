<title>Thêm Khóa Học - ADMIN </title>
<?php include_once 'admin-header.php'; ?>

<strong>
  <center>
    <h1 style="font-size:35pt;color:red">Thêm khóa học</h1>
  </center>
</strong>
<form class="modal-content" action="admin-index.php">
  <div class="container" style="margin-left:30%">
    </br>
    </br>
    <label for="TGV"><b style="font-size:15pt;color:rgb(209, 169, 48)">Tên Giáo Viên : </b></label>
    <input text style=" width:30%;" placeholder="Nhập tên giáo viên" name="Giáo viên" required></textarea>
    </br></br>
    <label for="TM"><b style="font-size:15pt;color:rgb(209, 169, 48)">Tên Lớp : </b></label>
    <input text style=" width:30%;" placeholder="Nhập tên lớp" name="Tên lớp" required></textarea>
    </br></br>
    <label for="StartDate"><b style="font-size:15pt;color:rgb(209, 169, 48)">Thời gian bắt đầu khóa học : </b></label>
    <input style="width:15%;" type="date" name="StartDate" required>
    </br></br>
    <label for="EndDate"><b style="font-size:15pt;color:rgb(209, 169, 48)">Thời gian kết thúc khóa học :</b></label>
    <input style="width:15%;" type="date" name="EndDate" required>
    </br></br>
    <label for="GT"><b style="font-size:15pt;color:rgb(209, 169, 48)">Giới thiệu khóa học : </b></label>
    <textarea style=" width:50%;height:20%" placeholder="Nhập giới thiệu" name="Giới thiệu" required></textarea>
    </br></br>
    <label for="NDung"><b style="font-size:15pt;color:rgb(209, 169, 48)">Nội dung khóa học : </b></label>
    <textarea style=" width:50%;height:20%" placeholder="Nhập nội dung" name="NDung" required></textarea>
    </br>
    </br>
    <div class="clearfix">
      <button type="submit" class="signupbtn" style="margin-left:20%;width:20%;height:5%;background:rgb(167, 116, 212)" href="admin-index.php"><strong><b style="font-size:15pt">Hoàn Tất</b></strong></button>
    </div>
  </div>
  </br>
  </br>
</form>
<?php include_once 'admin-footer.php' ?>
