<!-- Giỏ hàng -->

<!-- breadcrumb-section start -->
<!-- breadcrumb-section end -->
<!-- product tab start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-30 pb-30">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            Đơn Hàng Của Bạn
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          <a href="index.php?act=don-hang-cua-ban">
          Đơn Hàng Của Bạn
          </a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">don-hang
          Chi tiết đơn hàng
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
    <h3 style="margin-bottom:10px"><b>Thông tin đơn hàng:</b></h3>
      <div class="col-12">
        <div class="table-responsive" style="display:flex;justify-content: space-between;">
          <div>
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th class="text-center" scope="col">#</th>
                  <th class="text-center" scope="col">Tên Sản Phẩm</th>
                  <th class="text-center" scope="col">Hình ảnh</th>
                  <th class="text-center" scope="col">Dung tích</th>
                  <th class="text-center" scope="col">Giá tiền</th>
                  <th class="text-center" scope="col">Số lượng</th>
                  <th class="text-center" scope="col">Thành tiền</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                foreach($list_dhct as $key => $dhct):
                  extract($dhct);
              ?>
                <tr>
                  <td class="text-center" scope="row">
                    <?=$key+1??""?>
                  </td>
                  <td class="text-center" scope="row">
                    <?=$ten??""?>
                  </td>
                  <td class="text-center" scope="row">
                    <img src="upload/<?=$hinh??""?>" alt="" width="80px"> 
                  </td>
                  <td class="text-center" scope="row">
                    <?=$thetich??""?>
                  </td>
                  <td class="text-center" scope="row">
                    <?=number_format($gia,0,",",".")."<u>đ</u>"??""?>
                  </td>
                  <td class="text-center" scope="row">
                    <?=$soluong??""?>
                  </td>
                  <td class="text-center" scope="row">
                    <?php $giatien=$soluong*$gia?>
                    <?=number_format($giatien,0,",",".")."<u>đ</u>"??""?>
                  </td>
                  
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div style="margin-left:20px">
          <div style="padding:10px;border-radius:5px;border:solid 1px #f4c2c2">
          <table style="text-align:left;">
            <tr>
              <th scope="col">Tên người nhận:</th>
              <td  scope="col"><?=$ttdonhang['ten_nguoinhan']??""?></td>
            </tr>
            <tr>
              <th scope="col">Email:</th>
              <td scope="col"><?=$ttdonhang['email_nguoinhan']??""?></td>
            </tr>
            <tr>
              <th scope="col">Số điện thoại:</th>
              <td scope="col"><?=$ttdonhang['sdt_nguoinhan']??""?></td>
            </tr>
            <tr>
              <th scope="col">Ngày đặt hàng:</th>
              <td scope="col"><?=date("d/m/Y", strtotime($ttdonhang['ngaydat']))??""?></td>
            </tr>
            <tr>
              <th scope="col">Phương thức thanh toán:</th>
              <td scope="col"><?=$ttdonhang['pttt']??""?></td>
            </tr>
            <tr>
              <th scope="col">Tổng tiền đơn hàng:</th>
              <td scope="col"><?=number_format($ttdonhang['tongtien'],0,",",".")."<u>đ</u>"??""?></td>
            </tr>
            <tr>
              <th scope="col">Đã thanh toán:</th>
              <td scope="col"><?=number_format($ttdonhang['tongtien_dathanhtoan'],0,",",".")."<u>đ</u>"??""?></td>
            </tr>
            <tr>
              <th scope="col">Số tiền còn phải thanh toán:</th>
              <td scope="col"><?=number_format($ttdonhang['tongtien']-$ttdonhang['tongtien_dathanhtoan'],0,",",".")."<u>đ</u>"??""?></td>
            </tr>
            <tr>
              <th scope="col" colspan="2">Địa chỉ:</th>
            </tr>
            <tr>
              <td scope="col" colspan="2"><?=$ttdonhang['diachi_nguoinhan']??""?></td>
            </tr>
            <tr>
              <th scope="col" colspan="2">Ghi chú:</th>
            </tr>
            <tr>
              <td scope="col" colspan="2"><?=$ttdonhang['ghichu']??""?></td>
            </tr>
            </table>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="Place-order mt-25" style="text-align:left">
        <a class="btn btn--lg btn-primary my-2 my-sm-0" href="index.php?act=don-hang-cua-ban" >Trở Về</a>
    </div>
  </div>

</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>