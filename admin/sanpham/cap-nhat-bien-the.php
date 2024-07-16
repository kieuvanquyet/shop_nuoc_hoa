<div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Cập nhật biến thể</a></li>
      </ul>
    </div>
    <form action="index.php?act=cap-nhat-bien-the" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật biến thể</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="ten" value="<?=$ten?>" disabled style='background:#EDF5FF'>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Thể tích</label>
                <input class="form-control" type="text" disabled name="thetich" value="<?=$thetich?>"  style='background:#EDF5FF'>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá</label>
                <input class="form-control" type="number" name="gia" value="<?=$gia?>">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="soluong" value="<?=$soluong?>">
              </div>
          </div>
          <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
          <input type="hidden" name="id_thetich" value="<?=$id_thetich?>">
          <input type="hidden" name="id" value="<?=$id_sp_tt?>">
          <input type="submit" class="btn btn-save" value="Cập Nhật " name="capnhat">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-san-pham&id_sanpham=<?=$id_sanpham?>">Hủy bỏ</a>
          </form>
    </div>
  </main>