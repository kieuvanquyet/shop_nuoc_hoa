<div class="app-title">
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item">Danh sách sản phẩm</li>
    <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
  </ul>
</div>
<div class="row">
  <form action="index.php?act=them-moi-san-pham" method="post" enctype='multipart/form-data'>
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới sản phẩm</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" href="index.php?act=them-moi-danh-muc"><i class="fas fa-folder-plus"></i> Thêm danh mục</a></a>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-3">
              <label class="control-label">Tên sản phẩm</label>
              <br>
              <span style="color:red"><?php echo !empty($error['ten']) ? $error['ten'] : false  ?></span>
              <input class="form-control" type="text" name="ten">
            </div>
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Danh mục</label>
              <select class="form-control" id="exampleSelect1" name="iddm">
                <?php foreach ($listdanhmuc as $danhmuc) : ?>
                  <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['ten'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group  col-md-3">
              <label class="control-label">Xuất xứ </label>
              <br>
              <span style="color:red"><?php echo !empty($error['xuatxu']) ? $error['xuatxu'] : false ?></span>
              <input class="form-control" type="text" name="xuatxu">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Phong cách</label>
              <br>
              <span style="color:red"><?php echo !empty($error['phongcach'])? $error['phongcach']:false ?></span>
              <input class="form-control" type="text" name="phongcach">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Ảnh sản phẩm</label>
              <br>
              <span style="color:red"><?php echo !empty($error['hinh'])? $error['hinh']:false ?></span>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="hinh" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mô tả sản phẩm</label>
              <br>
              <span style="color:red"><?php echo !empty($error['mota'])? $error['mota']:false ?></span>
              <textarea class="form-control" name="mota" id="mota"></textarea>
            </div>
          </div>
          <input type="submit" class="btn btn-save" value="Lưu Lại" name="themmoi">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-san-pham">Hủy bỏ</a>
  </form>
</div>
</main>