<!-- Đăng nhập / Đăng ký -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2 class="title pb-4 text-dark text-capitalize">Đăng nhập và Đăng ký</h2>
        </div>
      </div>
      <div class="col-12">
        <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
          <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Đăng ký tài khoản
          </li>
        </ol>
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
          <div class="login-register-tab-list nav">
            <a href="?act=dangnhap">
              <h4>Đăng nhập</h4>
            </a>
            <a href="#" class="active">
              <h4>Đăng ký</h4>
            </a>
          </div>
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="index.php?act=dangky" method="post">
                  <span style="color: red"><?php echo !empty($error['hoten'])?$error['hoten']:false ?></span>
                    <input type="text" name="hoten" placeholder="Tên đăng nhập">
                    <span style="color: red"><?php echo !empty($error['email'])?$error['email']:false ?></span>
                    <input type="text" name="email" placeholder="Email">
                    <span style="color: red"><?php echo !empty($error['matkhau'])?$error['matkhau']:false ?></span>
                    <input type="password" name="matkhau" placeholder="Mật khẩu">
                    <span style="color: red"><?php echo !empty($error['xacnhan_matkhau'])?$error['xacnhan_matkhau']:false ?></span>
                    <input type="password" name="xacnhan_matkhau" placeholder="Xác nhận mật khẩu">
                   
                    <button type="submit" name="dangky" value="1" class="btn btn-dark btn--md">
                          <span>Đăng Ký</span>
                        </button>
                      <!-- <button type="submit" name="dangky" class="btn btn-dark btn--md" >
                        <span>Đăng ký</span>
                      </button> -->
                    </div>
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