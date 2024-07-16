<div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm mới biến thể</a></li>
      </ul>
    </div>
    <form action="index.php?act=them-moi-bien-the" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm mới biến thể</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="ten" value="<?=$sanpham['ten']?>" disabled style='background:#EDF5FF'>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Thể tích</label>
                <select class="form-control"  name="id_thetich">
                  <?php foreach($listthetich as $thetich):?>
                    <option value="<?=$thetich['id']?>" 
                      <?php 
                        foreach($check_thetich as $tt){
                          echo $thetich['id'] != $tt['id_thetich']?'':"disabled style='background:#EDF5FF'";
                        }
                      ?>
                    >
                      <?=$thetich['thetich']?>
                    </option>
                  <?php endforeach ?>
                </select>
                <span style="color:red"><?php echo !empty($error['id_thetich'])? $error['id_thetich']:false ?></span>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá</label>
                <br>
                <span style="color:red"><?php echo !empty($error['gia'])? $error['gia']:false ?></span>
                <input class="form-control" type="number" name="gia">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Số lượng</label>
                <br>
                <span style="color:red"><?php echo !empty($error['soluong'])? $error['soluong']:false ?></span>
                <input class="form-control" type="number" name="soluong">
              </div>
          </div>
          <div class="ghichu" style="margin-bottom:10px; color:#b0aeae">
                <span>*Không thể thêm thể tích mà sản phẩm đã có trước đó.</span>    
          </div>
          <input type="hidden" name="id_sanpham" value="<?=$sanpham['id']?>">
          <input type="submit" class="btn btn-save" value="Lưu Lại" name="themmoi">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-bien-the&id_sanpham=<?=$sanpham['id']?>">Hủy bỏ</a>
          </form>
    </div>
  </main>