<div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách đơn hàng</li>
        <li class="breadcrumb-item"><a href="#">Thay đổi trạng thái</a></li>
      </ul>
    </div>
    <form action="index.php?act=cap-nhat-trang-thai-don-hang" method="post">
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thay đổi trạng thái đơn hàng</h3>
          <div class="tile-body">
            <div class="row element-button">
            </div>
            <div class="row">
              <div class="form-group col-md-3">
                  <label class="control-label">Người nhận:</label>
                  <input class="form-control" type="text" value="<?=$ten_nguoinhan??""?>" disabled>
              </div>

              <div class="form-group col-md-3">
                  <label class="control-label">Ngày Đặt:</label>
                  <input class="form-control" type="text" value="<?=$ngaydat??""?>" disabled>
              </div>

              <div class="form-group col-md-3">
                  <label class="control-label">Tổng tiền:</label>
                  <input class="form-control" type="text" value="<?=number_format($tongtien,0,',','.')."đ"??""?>" disabled>
              </div>
              <div class="form-group col-md-3">
                  <label class="control-label">Phương thức thanh toán:</label>
                  <input class="form-control" type="text" value="<?=$pttt??""?>" disabled>
              </div>

    <style>
      input[disabled] {
      color: rgba(255, 69, 0, 0.6); /* Màu chữ cho input disabled */
      /* Các thuộc tính khác nếu cần thiết */
      font-weight:bold;
      font-size:16px;
    }
    .radio-group {
        display: flex;
        flex-direction: column;
    }

    .radio-label {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .radio-input {
        display: none;
    }

    .custom-radio {
        position: relative;
        cursor: pointer;
        width: 20px; /* Adjust the size of the custom radio button */
        height: 20px; /* Adjust the size of the custom radio button */
        border: 2px solid #3498db; /* Change the border color as desired */
        border-radius: 50%;
        transition: background-color 0.3s, border-color 0.3s; /* Add a smooth transition effect */
    }

    .radio-input:checked + .custom-radio {
        background-color: #3498db; /* Change the background color when the radio button is checked */
        border-color: #267abf; /* Change the border color for the checked state */
    }

    #radio-label-text {
        font-size: 16px; /* Adjust the font size as needed */
        margin-left: 10px; /* Adjust the spacing between the radio button and label */
    }
</style>

    
    <div class="form-group col-md-3">
        <label class="control-label">Trạng thái đơn hàng</label>
        <div class="radio-group">
            <?php foreach ($listtrangthai as $trangthai): ?>
                <label class="radio-label">
                  <?php 
                    $style="";
                    // if($id_pttt==2&&$trangthai['id']==1){
                    //   $style="display:none";
                    // }
                  ?>
                    <input type="radio" name="id_trangthai" style="<?=$style?>" value="<?=$trangthai['id']?>" class="radio-input" <?=$trangthai['id']==$id_trangthai?"checked":""?>>
                    <div class="custom-radio" style="<?=$style?>" ></div>
                    <span id="radio-label-text" style="<?=$style?>" ><?=$trangthai['trangthai_dh']?></span>
                </label>
            <?php endforeach ?> 
        </div>
    </div>

</div>

          <input type="hidden" name="id_donhang" value="<?=$id?>">
          <input type="submit" class="btn btn-save" value="Cập Nhật" name="capnhat">
          <a class="btn btn-cancel" href="index.php?act=danh-sach-don-hang">Hủy bỏ</a>
          </form>
    </div>
  </main>