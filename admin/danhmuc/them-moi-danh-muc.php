<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Danh sách danh mục</li>
    <li class="breadcrumb-item"><a href="#">Thêm mới danh mục</a></li>
  </ul>
</div>
<form action="index.php?act=them-moi-danh-muc" method="post">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới danh mục</h3>
        <div class="tile-body">
          <div class="row element-button">
          </div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Tên danh mục</label>
              <br>
              <span style="color:red"><?php echo !empty($error['ten']) ? $error['ten'] : false   ?> </span>
              <input class="form-control" type="text" name="ten">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Slogan</label>
              <br>
              <span style="color:red"> <?php echo !empty($error['slogan']) ? $error['slogan'] : false ?></span>
              <input class="form-control" type="text" name="slogan">
            </div>
          </div>
          <input type="submit" class="btn btn-save" value="Lưu Lại" name="themmoi">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-danh-muc">Hủy bỏ</a>
</form>
<?php 
if(!empty ($thongbao) && ($thongbao!="")){
     ?> <h5 style="color:red"><?=$thongbao?></h5><?php
}
?>
</div>
</main>