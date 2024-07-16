<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Quản lý tài khoản</li>
    <li class="breadcrumb-item"><a href="#">Thêm mới tài khoản</a></li>
  </ul>
</div>
<div class="row">
  <form action="index.php?act=them-moi-tai-khoan" method="post" enctype='multipart/form-data'>
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Thêm mới tài khoản</h3>
        <div class="tile-body">
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Tên đăng nhập</label>
              <br>
              <span style="color:red"><?php echo !empty($error['hoten']) ? $error['hoten'] : false  ?></span>
              <input class="form-control" type="text" name="hoten">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Email:</label>
              <br>
              <span style="color:red"><?php echo !empty($error['email']) ? $error['email'] : false  ?></span>
              <input class="form-control" type="text" name="email">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số điện thoại:</label>
              <br>
              <span style="color:red"><?php echo !empty($error['sdt']) ? $error['sdt'] : false  ?></span>
              <input class="form-control" type="text" name="sdt">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Mật khẩu:</label>
              <br>
              <span style="color:red"><?php echo !empty($error['matkhau']) ? $error['matkhau'] : false  ?></span>
              <input class="form-control" type="text" name="matkhau">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Địa chỉ:</label>
              <br>
              <span style="color:red"><?php echo !empty($error['diachi']) ? $error['diachi'] : false  ?></span>
              <input class="form-control" type="text" name="diachi">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Cấp bậc</label><hr> 
              <span style="margin-right:10px"><input type="radio" name="capbac" value="1" checked> Admin</span>
              <span><input type="radio" name="capbac" value="0" > Người dùng</span>
            </div>
          </div>
          <input type="submit" class="btn btn-save" value="Lưu Lại" name="themmoi">
          <a class="btn btn-cancel" href="index.php?act=quan-ly-tai-khoan">Hủy bỏ</a>
  </form>
</div>
</main>