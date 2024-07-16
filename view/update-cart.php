<?php 
    include "../model/giohang.php";
    include "../model/pdo.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //lấy dữ liệu từ ajax
        $id=$_POST['id'];//id giỏ hàng
        $soluong=$_POST['soluong'];
        update_giohang($soluong,$id);
        var_dump($_POST);
        die;
    }else{
        echo "Yêu cầu không hợp lệ";
    }
?>