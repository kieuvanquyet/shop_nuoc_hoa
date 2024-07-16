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
          Đơn hàng của bạn
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<section class="whish-list-section theme1 pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Người Nhận</th>
                <th class="text-center" scope="col">SĐT</th>
                <th class="text-center" scope="col">Phương Thức Thanh Toán</th>
                <th class="text-center" scope="col">Tổng Tiền</th>
                <th class="text-center" scope="col">Trạng Thái</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              foreach($listdonhang as $key => $donhang):
                extract($donhang);
             ?>
              <tr >
                <td class="text-center" scope="row">
                  <?=$key+1??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$ten_nguoinhan??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$sdt_nguoinhan??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=$pttt??""?>
                </td>
                <td class="text-center" scope="row">
                  <?=number_format($tongtien,0,",",".")."<u>đ</u>"??""?>
                </td>
                <td class="text-center " scope="row">
                  <?=$trangthai_dh??""?>
                </td>
                <td class="text-center">
                  <a href="index.php?act=chi-tiet-don-hang&id_donhang=<?=$id??""?>" class="btn btn-dark btn--lg">Xem</a>
                </td>
              </tr>
              <?php endforeach ?>
              <style>
                .trangthai{
                  border-radius: 15px;
                  color:white;
                  padding: 1px 5px;
                  font-size:10px;
                }
              </style>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- product tab end -->

<?php
include "view/footer.php";
?>