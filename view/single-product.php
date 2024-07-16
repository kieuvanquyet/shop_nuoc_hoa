<!-- Sản phẩm chi tiết -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">
            <?=$name_dm?>
          </h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
          <?=$name_dm?>
          </li>
        </ol>
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->
<style>
        .thetich {
          text-align: center;
          align-items: center;
          border: 1px solid #d1d5db;
          border-radius: 8px;
          color: #444;
          display: column;
          font-size: 14px;
          justify-content: center;
          margin: 0 25px 0;
          overflow: hidden;
          padding: 5px 0px;
          width: 20%;
        }
        .thetich:hover{
          color:orangered;
          border-color: orangered;
        }
        .product{
          display:none;
        }
        
      </style>
<!-- product-single start -->
<section class="product-single theme1 pt-60">
  <div class="container">
    <!-- div sản phẩm  -->
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div>
          <div class="position-relative">
            <span class="badge badge-danger top-right">New</span>
          </div>
          <div class="product-sync-init mb-20">
            <div class="single-product">
              <div class="product-thumb">
                <img src="upload/<?=$hinhanh?>" alt="product-thumb" />
              </div>
            </div>
            <!-- single-product end -->
            <!-- single-product end -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
          <span style="color:red"><?=$_COOKIE['thongbaotgh']??""?></span>
          <!-- load all sản phẩm biến thể -->
          <?php 
            foreach($sp_tt as $sp): 
            extract($sp);
          ?>
          <div class="single-product-info product">
            <div class="single-product-head">
              <h2 class="title mb-20"><?=$ten?></h2>
            </div>
            <div class="d-flex align-items-center mb-30">
              <!-- load all thể tích mà sản phẩm có -->
              <?php 
                $i=-1;
                foreach($thetich_in_sanpham as $tt){
                  $i++;
                  $check= $gia==$tt["gia"]?"style='color:orangered;border-color: orangered;'":"";
                  echo '<span class="thetich" onclick="showthetich('.$i.')" '.$check.'>
                        <strong>'.$tt["thetich"].'</strong> <br>
                        <p>'.number_format($tt["gia"],0,",",".").'<u>đ</u></p>
                      </span>
                      <input type="hidden" name="id_sanpham_thetich" value='.$tt["id"].'>'; 
                }
              ?> 
            </div>
            <div class="product-body mb-40">
              <div class="d-flex align-items-center mb-30">
                <span class="product-price me-2"><del class="del"><?php $giaao =$gia+10/100*$gia; echo number_format($giaao,0,",",".")?></del>
                  <span class="onsale"><?=number_format($gia,0,",",".") ."<u>đ</u>";?></span></span>
                <span class="badge position-static bg-dark rounded-0">Sale 10%</span>
              </div>
              <span>Còn lại: <?=$soluong?></span>
            </div>
            <div class="product-footer">
                <form action="index.php?act=sanphamct&id_sanpham=<?=$id_sanpham?>" method="post">
                  <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-30">
                    <div class="count d-flex">
                      <input type="number" name="soluong" min="1" max="<?=$soluong?>" step="1" value="1"  />
                      <div class="button-group">
                        <span class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </span>
                        <span class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </span>
                      </div>
                    </div>
                    <div>
                      <button type="submit" name="themgiohang">
                        <span class="btn btn-dark btn--xl mt-5 mt-sm-0">
                          <span class="me-2"><i class="ion-android-add"></i></span>
                          Thêm Vào Giỏ Hàng
                        </span>
                      </button>
                      <button type="submit" name="dathangngay">
                        <span class="btn btn-dark btn--xl mt-5 mt-sm-0">
                          <span class="me-2"><i class="ion-android-add"></i></span>
                          Đặt Hàng
                        </span>
                      </button>
                    </div>
                  </div>
                  <input type="hidden" name="id_sanpham_thetich" value="<?=$id?>">
                  <input type="hidden" name="gia" value="<?=$gia?>">

                </form>
              <p>
                Mô tả: <?=$mota?>
              </p>
              <ul>
                <li>Xuất xứ: <?=$xuatxu?></li>
                <li>Phong cách: <?=$phongcach?></li>
              </ul>
              <!-- <div class="addto-whish-list">
                  <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                  <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                </div> -->
              <div class="pro-social-links mt-10">
                <ul class="d-flex align-items-center">
                  <li class="share">Share</li>
                  <li>
                    <a href="#"><i class="ion-social-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-google"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="ion-social-pinterest"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
    <!-- end div sản phẩm -->
    <br>
    <div class="binhluan">
      <div class="title">
        <h1> BÌNH LUẬN</h1>
      </div>
      <hr>
      <div class="product_binhluan">
        <table>
          <!-- <tr>
            <th>Nội dung</th>
          </tr>
          <tr>

            <th>ID người dùng</th>
          </tr>

          <tr>
            <th>Ngày bình luận</th>
          </tr> -->

          <?php foreach ($binhluan as $value) : ?>
            <?php extract($value); ?>
            <br>
            <table>
            <tr>
              <td> <b><?=$hoten?></b> </td>
            </tr>
            <tr>
            <td> <?php echo $noidung ?></td>
            </tr>
            <tr>
            <td> <b></b><?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
            </tr>
            </table>
            <br>
            
          
        
          <?php endforeach; ?>
        </table>




      </div>
      <div class="form_binhluan">
        <form action="" method="POST">
          <input type="hidden" name="id_sanpham" value="<?php echo $_GET['id_sanpham'] ?>">
          <input type="hidden" name="id_taikhoan"  value="<?php echo isset($_SESSION['hoten']['id']) ? $_SESSION['hoten']['id'] : '' ?>">
          <?php
          if (!empty($_SESSION['taikhoan'])) : ?>
            <input type="text" class="noidung_binhluan" name="noidung" placeholder="Nội dung bình luận">
            <input type="submit" name="guibinhluan" id="" value="Gửi bình luận">
          <?php
          else :

          ?>

            <input type="text" name="" id="" placeholder="Đăng nhập để thực hiện chức năng bình luận" disabled style="width:343px">
          <?php
          endif; ?>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- product-single end -->
<!-- product tab start -->
<!-- new arrival section start -->
<section class="theme1 bg-white pb-80">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-3 mb-3">Có thể bạn sẽ thích</h2>
          <p class="text mt-10">Các sản phẩm liên quan & tương tự với sản phẩm trên.</p>
        </div>
      </div>
      <div class="col-12">
        <div class="product-slider-init theme1 slick-nav">
          <?php foreach($splq as $lq):?>
          <div class="slider-item">
            <div class="card product-card">
              <div class="card-body p-0">
                <div class="media flex-column">
                  <div class="product-thumbnail position-relative" style="width: 300px;height: 300px;">
                    <a href="index.php?act=sanphamct&id_sanpham=<?=$lq['id']?>">
                      <img class="first-img" src="upload/<?=$lq['hinh']?>" alt="thumbnail" style="width: 300px;height: 300px;"/>
                    </a>
                    <!-- product links -->
                    <ul class="actions d-flex justify-content-center">
                      <li>
                        <a class="action" href="index.php?act=sanphamct&id_sanpham=<?=$lq['id']?>">
                          <span data-bs-toggle="tooltip" data-placement="bottom" title="Xem chi tiết"
                            class="icon-magnifier"></span>
                        </a>
                      </li>
                    </ul>
                    <!-- product links end-->
                  </div>
                  <div class="media-body">
                    <div class="product-desc">
                      <h3 class="title">
                        <a href="index.php?act=sanphamct&id_sanpham=<?=$lq['id']?>"><?=$lq['tensp']?></a>
                      </h3>
                      <!-- <div class="star-rating">
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star de-selected"></span>
                      </div> -->
                      <?php
                        $gia = number_format($lq['giamin'],0,",",".")." - ".number_format($lq['giamax'],0,",",".");
                        if($lq['giamin'] == $lq['giamax']){
                          $gia = number_format($lq['giamin'],0,",",".");
                        }
                        $gia.=" <u>đ</u>";
                      ?>
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="product-price"><?=$gia?></span>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach;?>
          <!-- slider-item end -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- new arrival section end -->
<script>
  let index= 0;
  function showthetich(index){
    let thetich = document.getElementsByClassName('product');
    for(let i of thetich){
        i.style.display="none";
    }
    thetich[index].style.display="block";
  }
   showthetich(0);
</script>

<?php
include "view/footer.php";
?>