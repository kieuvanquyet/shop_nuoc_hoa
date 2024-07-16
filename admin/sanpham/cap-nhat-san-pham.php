
<div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Cập nhật sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
    <form action="index.php?act=cap-nhat-san-pham" method="post" enctype='multipart/form-data'>
        <?php 
            if(is_array($sanpham)){
                extract($sanpham);
            }
        ?>
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập nhật sản phẩm</h3>
          <div class="tile-body"> 
            <div class="row element-button">   
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="ten" value="<?=$ten??"";?>" >
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select class="form-control" id="exampleSelect1" name="iddm">
                  <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?=$danhmuc['id']?>" <?=$danhmuc['id']==$iddm?"selected":""?>>
                        <?=$danhmuc['ten']?>
                    </option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group  col-md-3">
                <label class="control-label">Xuất xứ</label>
                <input class="form-control" type="text" name="xuatxu" value="<?=$xuatxu??""?>" >
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Phong cách</label>
                <input class="form-control" type="text" name="phongcach" value="<?=$phongcach??""?>" >
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="hinh"/>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"><?=$mota?></textarea>
              </div>

          </div>
          <input type="hidden" name="id_sanpham" value="<?=$id??""?>">
          <input type="submit" class="btn btn-save" value="Lưu Lại" name="capnhat">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-san-pham">Hủy bỏ</a>
          </form>
        </div>
  </main>
  