<!-- Cửa hàng -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            Cửa Hàng
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Cửa Hàng
            <?= $namedm ?? "" ?>
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<!-- <style>
  .search-container {
    display: flex;
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    /* Ý căn giữa form */
    margin-top: -50px;
    margin-bottom: 20px;
    /* Khoảng cách bên dưới 20px */
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
  }

  }

  

  .search-button:hover {
    background-color: #0056b3;
  }
</style> -->
<style>
  form {
    display: flex;
    align-items: center;
  }
  
  .search-input {
    margin-left: 10px;
    border: 2px solid #fff;
  }

</style>
<!-- product tab start -->
<div class="product-tab bg-white pt-80 pb-80">
  <div class="container">
    <div class="grid-nav-wraper bg-lighten2 mb-30">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <nav class="shop-grid-nav">
            <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
              <li class="nav-item" id="xap-xep">
                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">
                  <i class="fa fa-th"></i>
                </a>
              </li>
              <li class="nav-item mr-0">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false"><i class="fa fa-list"></i></a>
              </li>
              <li>
                <!-- <span class="total-products text-capitalize">There are 13 products.</span> -->
              </li>
            </ul>
          </nav>
        </div>

        <div class="col-12 col-md-6 position-relative">
          <div class="shop-grid-button d-flex align-items-center">
            <form action="" method="post">
              <span class="sort-by">Sắp xếp theo:</span>
              <button class="d-flex justify-content-between" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 180px;"  style="border: 2px solid #fff;">
                Mức độ liên quan <span class="ion-android-arrow-dropdown"></span>
              </button>
              <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                <?php
                $check_dm = "";
                if(isset($_GET['iddm'])) {
                  $check_dm = "&iddm=".$_GET['iddm'];
                }
                ?>
                <a class="dropdown-item" href="index.php?act=cuahang<?= $check_dm ?>#xap-xep">Mức độ liên quan</a>
                <a class="dropdown-item" href="index.php?act=cuahang<?= $check_dm ?>&loc=sap-xep-tang#xap-xep">Tên từ A
                  đến
                  Z</a>
                <a class="dropdown-item" href="index.php?act=cuahang<?= $check_dm ?>&loc=sap-xep-giam#xap-xep">Tên từ Z
                  đến
                  A</a>
                <a class="dropdown-item" href="index.php?act=cuahang<?= $check_dm ?>&loc=gia-tang-dan#xap-xep">Giá tăng
                  dần</a>
                <a class="dropdown-item" href="index.php?act=cuahang<?= $check_dm ?>&loc=gia-giam-dan#xap-xep">Giá giảm
                  dần</a>
              </div>
              <div>
                <input type="text" class="search-input" placeholder="Tìm kiếm..." name="kyw">
                <input type="submit" value="Tìm Kiếm" class="btn-primary">
              </div>
          </div>    
        </div>
        </form>
      </div>
    </div>

  
  
  <!-- product-tab-nav end -->
  <div class="tab-content" id="pills-tabContent">
    <!-- first tab-pane -->
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row grid-view theme1">
        <?php
        foreach($listsp as $sp):
          extract($sp);
          ?>
          <div class="col-sm-6 col-md-4 mb-30">
            <div class="card product-card">
              <div class="card-body">
                <div class="product-thumbnail position-relative" style="height: 450px;">
                  <a href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                    <img class="first-img" src="upload/<?= $hinh ?>" alt="thumbnail"
                      style="width: 100% ;height: 420px;" />
                  </a>
                  <!-- product links -->
                  <ul class="actions d-flex justify-content-center">
                    <!-- <li>
                      <a class="action" href="wishlist.html">
                        <span data-bs-toggle="tooltip" data-placement="bottom" title="add to wishlist" class="icon-heart">
                        </span>
                      </a>
                    </li> -->
                    <li>
                      <a class="action" href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                        <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                          class="icon-magnifier"></span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="product-desc py-0 px-0">
                  <h3 class="title">
                    <a href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                      <?= $tensp ?>
                    </a>
                  </h3>
                  <!-- <div class="star-rating">
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star de-selected"></span>
                  </div> -->
                  <div class="d-flex align-items-center justify-content-between">
                    <?php
                    $gia = number_format($giamin,0,",",".")." - ".number_format($giamax,0,",",".");
                    if($giamin == $giamax) {
                      $gia = number_format($giamin,0,",",".");
                    }
                    $gia .= "<u>đ</u>";
                    ?>
                    <span class="product-price">
                      <?= $gia ?>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <!-- product-list End -->
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- second tab-pane -->
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="row grid-view-list theme1">
        <div class="col-12 mb-30">
          <?php
          foreach($listsp as $sp):
            extract($sp);
            ?>
            <div class="card product-card">
              <div class="card-body">
                <div class="media flex-column flex-md-row">
                  <div class="product-thumbnail position-relative" style="width: 330px;height: 330px;">
                    <a href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                      <img class="first-img" src="upload/<?= $hinh ?>" alt="thumbnail" />
                    </a>
                    <!-- product links -->
                    <ul class="actions d-flex justify-content-center">
                    
                      <li>
                        <a class="action" href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                          <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                            class="icon-magnifier"></span>
                        </a>
                      </li>
                    </ul>
                    <!-- product links end-->
                  </div>
                  <div class="media-body ps-md-4">
                    <div class="product-desc py-0 px-0">
                      <h3 class="title">
                        <a href="shop-grid-4-column.html">
                          <?= $tensp ?>
                        </a>
                      </h3>
                      
                      <?php
                      $gia = number_format($giamin,0,",",".")." - ".number_format($giamax,0,",",".");
                      if($giamin == $giamax) {
                        $gia = number_format($giamin,0,",",".");
                      }
                      $gia .= "<u>đ</u>";
                      ?>
                      <span class="product-price">
                        <?= $gia ?>
                      </span>
                    </div>
                    <ul class="product-list-des">
                      <p> Mô tả:
                        <?= $mota ?>
                      </p>
                      <li>Xuất xứ:
                        <?= $xuatxu ?>
                      </li>
                      <li>Phong cách:
                        <?= $phongcach ?>
                      </li>
                    </ul>
                    <a href="index.php?act=sanphamct&id_sanpham=<?= $id ?>">
                      <span class="btn btn-dark btn--xl">
                        Xem Chi Tiết
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- product-list End -->
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <nav class="pagination-section mt-30">
        <ul class="pagination justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</div>
<!-- product tab end -->

<?php
include "view/footer.php";
?>