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
            Đăng nhập tài khoản của bạn
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
          <?php
            if (isset($_SESSION['taikhoan'])) {
              extract(($_SESSION['taikhoan']));
            ?>
            <a class="active" href="">
              <h4>Tài khoản của bạn</h4>
            </a>
          <?php
            } else {
          ?>
          <a class="active" href="">
              <h4>Đăng nhập</h4>
            </a>
            <a href="index.php?act=dangky">
              <h4>Đăng ký</h4>
            </a>
          <?php
          } 
          ?>
          </div>
          <div class="tab-content">
            <div id="lg1" class="tab-pane active">
              <div class="login-form-container">
                <div class="login-register-form">
                  <?php
                  if (isset($_SESSION['taikhoan'])) {
                    extract(($_SESSION['taikhoan']));
                  ?>
                    
                    <a href="index.php?act=don-hang-cua-ban">Đơn hàng của bạn</a>
                    <br>
                    <a href="index.php?act=edit_tk">Cập nhật tài khoản</a>
                    <br>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    <br>
                    <a href="index.php?act=thoat">Thoát</a>
                  <?php
                  } else {
                  ?>

                        <?php
                        if(isset($thongbao)&&($thongbao!="")){
                          echo '<div class="alert alert-danger">';
                          echo $thongbao;
                          echo '</div>';
                        }
                        ?>
                    

                    <form action="index.php?act=dangnhap" method="post">
                      <!-- <input type="text" name="username" placeholder="Tên đăng nhập"> -->
                      <span style="color:red"><?php echo !empty ($error['hoten'])?($error['hoten']):false ?></span>
                      <input type="text" name="hoten" id="" placeholder="Tên đăng nhập">
                      <span style="color: red;"><?php  echo !empty($error['matkhau'])? ($error['matkhau']):false ?></span>
                      <input type="password" name="matkhau" type="password" id="" placeholder="Nhập mật khẩu">
                      <div class="button-box">
                        <div class="login-toggle-btn">
                          <!-- <input id="remember" type="checkbox" /> -->
                          
                          <a href="index.php?act=edit_tk">Cập nhật tài khoản</a>

                          <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                        </div>
                        <button type="submit" name="dangnhap" value="1" class="btn btn-dark btn--md">
                          <span>Đăng Nhập</span>
                        </button>
                      </div>
                    </form>
                  
                  </div>
                  <?php  }
                  ?>

              </div>
            </div>
            <!-- <div id="lg2" class="tab-pane">
              <div class="login-form-container">
                <div class="login-register-form">
                  <form action="https://htmldemo.net/looki/looki/assets/php/contact.php" method="post">
                   
                    <input name="user-email" placeholder="Email" type="email" />
                    <div class="button-box">
                      <button type="submit" class="btn btn-dark btn--md">
                        <span>Đăng ký</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div> -->
          </div>
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