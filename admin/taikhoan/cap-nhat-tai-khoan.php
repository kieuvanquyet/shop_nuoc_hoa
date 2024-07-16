<?php
if(!empty($taikhoan)){
  if (is_array($taikhoan)) {
    extract($taikhoan);
  }
}
?>
<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Quản lý tài khoản</li>
    <li class="breadcrumb-item"><a href="#">Cập nhật tài khoản</a></li>
  </ul>
</div>
<form action="index.php?act=cap-nhat-tai-khoan" method="post">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">

        <div class="tile-body">
          <div class="row element-button">
          </div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" type="text" name="hoten" value="<?php if (isset($hoten) && ($hoten != "")) echo $hoten?>">
            </div>
            <br>
            <div class="form-group col-md-3">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" name="email" value="<?php if (isset($email) && ($email != "")) echo $email;?>">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Điện thoại</label>
              <input class="form-control" type="text" name="sdt" value="<?php if (isset($sdt) && ($sdt != "")) echo $sdt; ?>">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" type="text" name="matkhau" value="<?php if (isset($matkhau) && ($matkhau != "")) echo $matkhau; ?>">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text" name="diachi" value="<?php if (isset($diachi) && ($diachi != "")) echo $diachi; ?>">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Cấp bậc</label><hr> 
              <span style="margin-right:10px"><input type="radio" name="capbac" value="1" <?=$capbac==1?"checked":""?>> Admin</span>
              <span><input type="radio" name="capbac" value="0" <?=$capbac==0?"checked":""?>> Người dùng</span>
            </div>
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="submit" class="btn btn-save" value="Cập Nhật" name="capnhat">
          <a class="btn btn-cancel" href="index.php?act=quan-ly-tai-khoan">Hủy bỏ</a>
</form>
</div>

<?php
if(isset($thongbao)&&($thongbao!=""))
echo $thongbao;
?>

</main>