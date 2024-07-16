
</main>
<!-- BANNER 2 -->
<!-- Đăng nhập / Đăng ký -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Cập nhật tài khoản</h2>
        </div>
      </div>
      <div class="col-12">
        <!-- <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Đăng ký tài khoản
          </li>
        </ol> -->
      </div>
    </div>
  </div>
</nav>
<!-- breadcrumb-section end -->

<!-- login area start -->
<div class="login-register-area pt-80 pb-80">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-12 ms-auto me-auto">
        <div class="login-register-wrapper">
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                <?php
                if (isset($_SESSION['taikhoan']) && (is_array($_SESSION['taikhoan']))) {
                    extract($_SESSION['taikhoan']);
                    // echo '<pre>';
                    // print_r($_SESSION);
                    // echo '</pre>';
                }
                ?>
                <form action="index.php?act=edit_tk" method="POST">
                    <h4>Tên đăng nhập</h4>
                    <input type="text" name="hoten" value="<?= $hoten ?>" placeholder="Nhập vào tên">
                    <h4>Email</h4>
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Nhập vào email">
                    <h4>Điện thoại</h4>
                    <input type="text" name="sdt" value="<?= $sdt ?>" placeholder="Nhập vào số điện thoại">
                    <h4>Mật khẩu</h4>
                    <input type="password" name="matkhau" value="<?= $matkhau ?>" placeholder="Nhập mật khẩu">
                    <h4>Địa chỉ</h4>
                    <input type="text" name="diachi" value="<?= $diachi ?>" placeholder="Nhập vào địa chỉ">
                    
                    <br>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                    

                </form>
                  <?php
                  if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                  ?>
                </div>
              </div>
            </div>
            <!-- <div id="lg2" class="tab-pane">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="https://htmldemo.net/looki/looki/assets/php/contact.php" method="post">
                    <input
                      type="text"
                      name="user-name"
                      placeholder="Username"
                    />
                    <input
                      type="password"
                      name="user-password"
                      placeholder="Password"
                    />
                    <input name="user-email" placeholder="Email" type="email" />
                    <div class="button-box">
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Đăng kí</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- login area end -->

<?php
include "view/footer.php";
?>