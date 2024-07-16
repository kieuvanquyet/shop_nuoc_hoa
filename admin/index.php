
<?php
session_start();
include "../global.php";
if(isset($taikhoan)){
  if( $taikhoan['capbac']==1){
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/donhang.php";
    include "../model/thetich.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
          case 'thoat':
            session_unset();
            header("location:index.php");
            break;
          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////-------Danh--------\\\\\\\\\\\\
          ////////////------ Mục --------\\\\\\\\\\\\

          case "danh-sach-danh-muc": 
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;
          case "them-moi-danh-muc": 
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              $ten= $_POST['ten']; 
              $slogan = $_POST['slogan'];
              // validate
              $error = [];
              if (empty(trim($ten))) {
                $error['ten'] = "Tên danh mục  không được để trống";
              }
              if (empty(trim($slogan))) {
                $error['slogan'] = "Slogan không được để trống";
              }
              if (empty($error)) {
                insert_danhmuc($ten, $slogan);
                $thongbao = "Thêm thành công";
              }
            }
            include "danhmuc/them-moi-danh-muc.php";
            break;
          case "xoa-danh-muc": 
            if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                $danhmuc_fk = fk_danhmuc ($_GET['id_danhmuc']);
                if(empty($danhmuc_fk)){
                  delete_danhmuc($_GET['id_danhmuc']);
                }else{
                  $thongbao = 'Danh mục còn sản phẩm , cần xóa sản phẩm trước khi xóa danh mục';
                }      
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;
          case 'sua-danh-muc':
            if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }            
            include "danhmuc/cap-nhat-danh-muc.php";
            break; 
          case 'cap-nhat-danh-muc':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $ten= $_POST['ten'];
                $id= $_POST['id'];
                $slogan= $_POST['slogan'];
                update_danhmuc($id,$ten,$slogan);
                $thongbao= "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/danh-sach-danh-muc.php";
            break;  
          ///----The end quản lý danh mục

          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////------ Sản --------\\\\\\\\\\\\
          ////////////-------Phẩm--------\\\\\\\\\\\\
          case "danh-sach-san-pham":
              $listdanhmuc = loadall_danhmuc();
              $kyw = "";
              $iddm = 0;
              if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];   
                $iddm = $_POST['iddm'];
              }
              $listsanpham = loadall_sanpham($kyw,$iddm);
              include "sanpham/danh-sach-san-pham.php";
              break;
          case "them-moi-san-pham":
              if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $ten= $_POST['ten']; 
                $xuatxu= $_POST['xuatxu']; 
                $phongcach= $_POST['phongcach']; 
                $mota= $_POST['mota']; 
                $iddm= $_POST['iddm'];
                $file = $_FILES['hinh'];
                $hinh = '';
                if($file['size']>0){
                  //hinh là tên file ảnh
                  $hinh = $file['name'];
                  // foder_hinh là dẫn đến thư mục chứa hình ảnh;
                  $foder_hinh ="../upload/" . $hinh;
                  //tải ảnh vài foder upload
                  move_uploaded_file($file['tmp_name'], $foder_hinh);
                }
                $error = [];

                if (empty((trim($ten)))) {
                  $error['ten'] = "Tên sản phẩm không được bỏ trống";
                }
                if (empty((trim($xuatxu)))) {
                  $error['xuatxu'] = "Xuất sứ không được để trống";
                }
                if (empty((trim($phongcach)))) {
                  $error['phongcach'] = "Phong cách không được để trống";
                }
                if (empty((trim($mota)))) {
                  $error['mota'] = "Mô tả không được để trống";
                }
                if (empty(($file))) {
                  $error['hinh'] = "Hình ảnh không được để trống";
                }
                if (empty($error)) {
                  insert_sanpham($ten, $hinh, $xuatxu, $phongcach, $mota, $iddm);
                  $thongbao = "thêm thành công";
                }
              }
              $listdanhmuc = loadall_danhmuc();
              include "sanpham/them-moi-san-pham.php";
              break;
          case 'sua-san-pham':
            if(isset($_GET['id_sanpham'])&&($_GET['id_sanpham']>0)){
              $sanpham = loadone_sanpham($_GET['id_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();            
            include "sanpham/cap-nhat-san-pham.php";
            break; 
          case 'cap-nhat-san-pham':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              $id_sanpham = $_POST['id_sanpham'];
              $ten= $_POST['ten']; 
              $xuatxu= $_POST['xuatxu']; 
              $phongcach= $_POST['phongcach']; 
              $mota= $_POST['mota']; 
              $iddm= $_POST['iddm'];
              $file = $_FILES['hinh'];
              $hinh = '';
              if($file['size']>0){
                //hinh là tên file ảnh
                $hinh = $file['name'];
                // foder_hinh là dẫn đến thư mục chứa hình ảnh;
                $foder_hinh ="../upload/" . $hinh;
                //tải ảnh vài foder upload
                move_uploaded_file($file['tmp_name'], $foder_hinh);
              }
              update_sanpham($id_sanpham,$ten, $hinh, $xuatxu , $phongcach , $mota, $iddm);
              $thongbao= "cập nhật thành công";
            }
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/danh-sach-san-pham.php";
            break;
          case "danh-sach-bien-the":
            $id_sanpham = $_GET['id_sanpham'];
            $sanpham =loadone_sanpham($id_sanpham);
            $listsanpham_thetich = loadall_sanpham_thetich($id_sanpham);
            include "sanpham/danh-sach-bien-the.php";
            break;
          case "them-moi-bien-the":
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
              $id_sanpham = $_GET['id_sanpham'];
            } else {
              $id_sanpham = $_POST['id_sanpham'];
            }
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
              $id_sanpham = $_POST['id_sanpham'];
              $gia = $_POST['gia'];
              $soluong = $_POST['soluong'];
              $id_thetich = $_POST['id_thetich'];
              // validate
              $error = [];
              if (empty(trim($gia))) {
                $error['gia'] = "Giá không được để trống";
              }
              if (empty(trim($soluong))) {
                $error['soluong'] = "Số lượng không được để trống";
              }
  
              if (empty($id_thetich)) {
                $error['id_thetich'] = 'Vui lòng chọn thể tích';
              }
              if (empty($error)) {
                insert_sanpham_thetich($id_sanpham, $id_thetich, $gia, $soluong);
                header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
              }
            }
            $sanpham =loadone_sanpham($id_sanpham);
            $check_thetich =check_thetich($id_sanpham);
            $listthetich = loadall_thetich();
            include "sanpham/them-moi-bien-the.php";
            break;
          case "sua-bien-the":
            if(isset($_GET['id_bienthe'])&&$_GET['id_bienthe']>0){
              $sanpham_thetich = loadone_sanpham_thetich($_GET['id_bienthe']);
              extract($sanpham_thetich);
            }            
            include "sanpham/cap-nhat-bien-the.php";
            break;
          case 'cap-nhat-bien-the':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
              extract($_POST);
              update_sanpham_thetich($id,$id_sanpham,$id_thetich,$gia,$soluong);
              header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            }
            break; 
          case "xoa-bien-the":
            if(isset($_GET['id_bienthe'])&&($_GET['id_bienthe']>0)){
              delete_sanpham_thetich($_GET['id_bienthe']);
            }
            $id_sanpham = $_GET['id_sanpham'];
            header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            break;
          case "khoi-phuc-bien-the":
            if(isset($_GET['id_bienthe'])&&($_GET['id_bienthe']>0)){
              restore_sanpham_thetich($_GET['id_bienthe']);
            }
            $id_sanpham = $_GET['id_sanpham'];
            header("location:index.php?act=danh-sach-bien-the&id_sanpham=$id_sanpham");
            break;
          case "quan-ly-tai-khoan":
            $kyw = "";
            $capbac = "";
            if (isset($_POST['listok']) && ($_POST['listok'])) {
              $kyw = $_POST['kyw'];   
              $capbac = $_POST['capbac'];
            }
            $listtaikhoan = loadall_taikhoan($kyw,$capbac);
            include "taikhoan/quan-ly-tai-khoan.php";
            break;
          case "sua-tai-khoan":
            if(isset($_GET['id'])&& ($_GET['id'])>0){
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan('','');
            include "taikhoan/cap-nhat-tai-khoan.php";
            break;
          case "cap-nhat-tai-khoan":
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id = $_POST['id'];
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $matkhau = $_POST['matkhau'];
                $diachi = $_POST['diachi'];
                $capbac = $_POST['capbac'];
                // extract($taikhoan);
                update_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi, $capbac);
                $thongbao = 'Cập nhật tài khoản thành công';
            }
            header("location:index.php?act=quan-ly-tai-khoan");
          case 'xoa-tai-khoan':
            if(isset($_GET['id'])&&($_GET['id'])){
                delete_taikhoan($_GET['id']);
                setcookie('thongbao',"**Xóa tài khoản thành công!",time()+5);
            }
            header("location:index.php?act=quan-ly-tai-khoan");
            break;
          case "them-moi-tai-khoan":
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
              extract($_POST);
              $error = [];
              if (empty((trim($hoten)))) {
                $error['hoten'] = "Tên đăng nhập không được bỏ trống";
              }
              if (empty((trim($email)))) {
                $error['email'] = "Email không được để trống";
              }
              if (empty((trim($sdt)))) {
                $error['sdt'] = "Số điện thoại không được để trống";
              }
              if (empty((trim($matkhau)))) {
                $error['matkhau'] = "Mật khẩu không được để trống";
              }
              if (empty((trim($diachi)))) {
                $error['diachi'] = "Địa chỉ không được để trống";
              }
              if (empty($error)) {
                insert_taikhoan_admin($hoten,$email,$sdt,$matkhau,$diachi,$capbac);
                setcookie('thongbao',"**Thêm tài khoản thành công !",time()+5);
                header("location:index.php?act=quan-ly-tai-khoan");
              }
            }
            include "taikhoan/them-moi-tai-khoan.php";
            break;
          ////////////-------QUản--------\\\\\\\\\\\\
          ////////////-----  Lý  --------\\\\\\\\\\\\
          ////////////------ Đơn --------\\\\\\\\\\\\
          ////////////-------Hàng--------\\\\\\\\\\\\
          case "danh-sach-don-hang":
            $id_trangthai="";
            if(isset($_POST['listok'])&&$_POST['listok']!=""){
              $id_trangthai=$_POST['id_trangthai'];
            }
            $list_dh=loadall_donhang_admin($id_trangthai);
            include "donhang/danh-sach-don-hang.php";
            break;
          case "thay-doi-trang-thai":
            if(isset($_GET['id_donhang'])&&isset($_GET['id_trangthai'])){
              $id_donhang =$_GET['id_donhang'];
              $id_trangthai =$_GET['id_trangthai'];
              switch ($id_trangthai) {
                case '1':
                  $id_trangthai=2;
                  break;
                case '2':
                  $id_trangthai=3;
                  break;
              }
              update_donhang($id_trangthai,$id_donhang,0);
              header("location:index.php?act=danh-sach-don-hang");
            }
            break;
          case "sua-trang-thai-don-hang":
            if(isset($_GET['id_donhang'])&&($_GET['id_donhang']>0)){
              $donhang = loadone_donhang_admin($_GET['id_donhang']);
              extract($donhang);
              $listtrangthai= loadall_trangthaidonhang();
            }            
            include "donhang/cap-nhat-trang-thai-don-hang.php"; 
            break;
          case "cap-nhat-trang-thai-don-hang":
            if(isset($_POST['id_trangthai'])){
              $id_trangthai=$_POST['id_trangthai'];
              $id_donhang=$_POST['id_donhang'];
              update_donhang($id_trangthai,$id_donhang,0);
              header("location:index.php?act=danh-sach-don-hang");
            }       
            break;
          case "chi-tiet-don-hang":
            if(isset($_GET['id_donhang'])){
              $id_donhang=$_GET['id_donhang'];
              $ttdonhang =loadone_donhang_admin($id_donhang);
              $list_dhct=loadall_donhangchitiet_admin($id_donhang);
            }
            include "donhang/chi-tiet-don-hang.php";
            break;
            case "bieu-do-thong-ke":
              $listthongke = thongke();
              $rows = doanhthutheothang();
              include "baocaothongke/bieu-do-thong-ke.php";
              break;
            case "quan-ly-binh-luan":
              $listbinhluan = loadall_binhluan(0);
              include "binhluan/quan-ly-binh-luan.php";
              break;
            case "xoabl":
              if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    
                delete_binhluan($_GET['id']);
                
              }
              $listbinhluan = loadall_binhluan(0);
              include "binhluan/quan-ly-binh-luan.php";
              break;
            }
    }else{
        include "home.php";
    }
    include "footer.php";
  }else{
    echo '<div style="margin:120px 30%">
          <img src="da4242" alt="">
          <h1 style="font-size:170px;padding 0;margin:0;">504</h1>
          <h2>Bạn không có quyền truy cập trang web này</h2>
          <a href="../index.php">Quay lại tại đây</a>
      </div>';
  }
}else{
  header("Location:../index.php?act=dangnhap");
}

?> 

