<div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách danh mục</li>
        <li class="breadcrumb-item"><a href="#">Cập Nhật danh mục</a></li>
      </ul>
    </div>
    <form action="index.php?act=cap-nhat-danh-muc" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật danh mục</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <div class="row">
             <div class="form-group col-md-3">
                <label class="control-label">Tên danh mục</label>
                <input class="form-control" type="text" name="ten" value="<?=$dm['ten']?>">
              </div>
          </div> 
          <div class="row">
             <div class="form-group col-md-3">
                <label class="control-label">Slogan</label>
                <input class="form-control" type="text" name="slogan" value="<?=$dm['slogan']?>">
              </div>
          </div> 
          <input type="hidden" name="id" value="<?=$dm['id']?>">
          <input type="submit" class="btn btn-save" value="Cập Nhật" name="capnhat">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-danh-muc">Hủy bỏ</a>
          </form>
    </div>
  </main>