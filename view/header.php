<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Perfume Shop</title>
  <link rel="shortcut icon" type="image/x-icon" href="view/assets/logo/logomoi.png" />
  <link rel="stylesheet" href="view/assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="view/assets/css/ionicons.min.css" />
  <link rel="stylesheet" href="view/assets/css/simple-line-icons.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/jquery-ui.min.css">
  <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="view/assets/css/plugins/plugins.css" />
  <link rel="stylesheet" href="view/assets/css/style.min.css" />
</head>

<body>
  <header>
    <!-- header-middle satrt -->
    <div id="sticky" class="header-middle theme1 py-15 py-lg-0">
      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-6 col-lg-2 col-xl-2">
            <div class="logo">
              <a href="index.php"><img src="view/assets/img/logo/logomoi.png" alt="logo" /></a>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-none d-lg-block">
            <ul class="main-menu d-flex justify-content-center">
              <li class="active ml-0">
                <a href="index.php" class="ps-0">Trang Chủ</a>
              </li>
              <li class="position-static">
                <a href="index.php?act=cuahang">Cửa hàng<i class="ion-ios-arrow-down"></i></a>
                <ul class="sub-menu">
                  <?php foreach($listdm as $dm): ?>
                    <li><a href="index.php?act=cuahang&iddm=<?= $dm['id'] ?>">
                        <?= $dm['ten'] ?>
                      </a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <li>
                <a href="index.php?act=trang">Giới Thiệu</a>
              </li>
              <!-- <li>
                <a href="index.php?act=thongtin">Tin Tức</a>
              </li> -->
              <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-3 col-xl-2">
            <!-- search-form end -->
            <div class="d-flex align-items-center justify-content-end">
              <!-- static-media end -->
              <div class="cart-block-links theme1 d-none d-sm-block">
                <ul class="d-flex">
                  <li> <!--tìm kiếm-->
                    <a class="offcanvas-toggle">
                      <span class="position-relative">
                        <!-- <form id="search-form" action="#" method="post" class="d-flex">
                          <input type="text" name="kyw" id="search-text" placeholder="Search..." required>
                          <input type="submit" value="timkiem" id="search-submit">
                          <button id="search_btn"><i class="fa-solid fa-search fa-l"></i></button>
                        </form> -->
                      </span>
                    </a>
                  </li>
                  <style>
                    #search-form {
                      background: #fff;
                      border-radius: 30px;
                      display: flex;
                      align-items: center;

                    }

                    #search-submit {
                      border: none;
                      outline: none;
                      background: none;
                      font-size: 15px;
                      width: 0;
                      padding: 0;
                      transition: all 0.5s ease-in-out;
                      padding-left: 5px;
                      border-radius: 3px;
                      margin-right: 2px;
                      border-color: #d1d5db;

                    }

                    #search-form:hover #search-text {
                      width: 50px;
                      display: block
                    }

                    #search-text {
                      border: none;
                      outline: none;
                      background: none;
                      font-size: 15px;
                      width: 0;
                      padding: 0;
                      transition: all 0.5s ease-in-out;
                      padding-left: 5px;
                      border-radius: 3px;
                      margin-right: 2px;
                      border-color: #d1d5db;
                    }

                    #search-form:hover #search-text,
                    #search-form #search-text:valid {
                      /* valid: khi có thông tin thì hover sẽ ko đóng! */
                      border: 1px solid #d1d5db;
                      width: 200px;
                      /* padding: 10px 0px 10px 15px; */
                    }

                    #search_btn {
                      background-color: #fff;
                      border: none;
                      /* padding: 15px 15px; */
                      font-size: 20px;
                      cursor: pointer;
                      border-radius: 50%;
                      margin-right: 3px;
                    }
                  </style>
                  <!-- listlove -->
                  <!-- <li class="mr-xl-0 cart-block position-relative">
                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                      <span class="position-relative">
                      <i class="fa-solid fa-heart fa-l" style="color: #020203;"></i>
                      </span>
                    </a>
                  </li> -->

                  <!-- cart -->
                  <li>
                    <a  href="index.php?act=giohang">
                      <span class="position-relative">
                        <i class="fa-solid fa-cart-shopping fa-l" style="color: #000000;"></i>
                        <span class="badge cbdg1">
                          <?= $giohang ?? "0"; ?>
                        </span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <span class="position-relative">
                      <a href="index.php?act=dangnhap">
                        <i class="fa-solid fa-user fa-l" style="color: #0d0d0d;"></i>
                      </a>
                    </span>
                  </li>
                  <!-- cart block end -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header-middle end -->
  </header>
  <!-- header end -->