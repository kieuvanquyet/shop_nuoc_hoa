<?php 
    function insert_donhang($id_taikhoan, $ten_nguoinhan, $email_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan, $id_pttt, $tongtien, $ghichu){
        $sql= "INSERT INTO donhang(id_taikhoan, ten_nguoinhan, email_nguoinhan, sdt_nguoinhan, diachi_nguoinhan, id_pttt, tongtien,  ghichu)
         VALUES ($id_taikhoan, '$ten_nguoinhan', '$email_nguoinhan', '$sdt_nguoinhan', '$diachi_nguoinhan', '$id_pttt', $tongtien,  '$ghichu')";
        $donhangnew = pdo_execute($sql); 
        return $donhangnew ;
    }
    function insert_donhangchitiet($id_donhang,$id_sanpham_thetich,$soluong,$gia){
        $sql= "INSERT INTO donhangchitiet(id_donhang,id_sanpham_thetich,soluong,gia)
        VALUES ($id_donhang,$id_sanpham_thetich,$soluong,$gia)";
        pdo_execute($sql); 
    }
    function loadall_donhang($id_taikhoan){
        $sql = "SELECT donhang.id,ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,pttt,tongtien,ghichu,trangthai_dh FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai
        join phuongthucthanhtoan on phuongthucthanhtoan.id = donhang.id_pttt
        WHERE id_taikhoan=$id_taikhoan
        order by donhang.id";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadall_donhangchitiet_admin($id_donhang){
        $sql = "SELECT sanpham.ten ,hinh,thetich,donhangchitiet.soluong,donhangchitiet.gia FROM `donhangchitiet`
        join sanpham_thetich on sanpham_thetich.id=id_sanpham_thetich
        join sanpham on sanpham_thetich.id_sanpham = sanpham.id
        join thetich on thetich.id = sanpham_thetich.id_thetich
        WHERE id_donhang=$id_donhang";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadall_donhangchitiet($id_donhang,$id_taikhoan){
        $sql = "SELECT sanpham.ten ,hinh,thetich,donhangchitiet.soluong,donhangchitiet.gia FROM `donhangchitiet`
        join sanpham_thetich on sanpham_thetich.id=id_sanpham_thetich
        join sanpham on sanpham_thetich.id_sanpham = sanpham.id
        join thetich on thetich.id = sanpham_thetich.id_thetich
        join donhang on donhang.id = donhangchitiet.id_donhang
        WHERE id_donhang=$id_donhang and id_taikhoan =$id_taikhoan";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadall_donhang_admin($id_trangthai){
        $sql = "SELECT donhang.id,ten_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,id_pttt,pttt,tongtien,ghichu,trangthai_dh,ngaydat,id_trangthai FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai
        join phuongthucthanhtoan on phuongthucthanhtoan.id = donhang.id_pttt";
        if($id_trangthai!=""){
            $sql .= " where id_trangthai =$id_trangthai";  
        }
        $sql .= " order by donhang.id";
        $donhang = pdo_query($sql);
        return $donhang;  
    }
    function loadone_donhang($id_taikhoan,$id_donhang){
        $sql = "SELECT donhang.id,ten_nguoinhan,email_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,pttt,tongtien,tongtien_dathanhtoan,ngaydat,ghichu,trangthai_dh FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai
        join phuongthucthanhtoan on phuongthucthanhtoan.id = donhang.id_pttt
        WHERE id_taikhoan=$id_taikhoan and donhang.id =$id_donhang 
        order by donhang.id";
        $donhang = pdo_query_one($sql);
        return $donhang;  
    }
    function loadone_donhang_admin($id_donhang){
        $sql = "SELECT donhang.id,ten_nguoinhan,email_nguoinhan,sdt_nguoinhan,diachi_nguoinhan,id_pttt,pttt,tongtien,tongtien_dathanhtoan,ngaydat,ghichu,trangthai_dh ,id_trangthai FROM `donhang` 
        join trangthaidonhang on trangthaidonhang.id=donhang.id_trangthai
        join phuongthucthanhtoan on phuongthucthanhtoan.id = donhang.id_pttt
        WHERE donhang.id =$id_donhang 
        order by donhang.id";
        $donhang = pdo_query_one($sql);
        return $donhang;  
    }
    
    function update_donhang($id_trangthai,$id_donhang,$tongtien_dathanhtoan){
        $sql = "Update donhang set id_trangthai = $id_trangthai";
        if($tongtien_dathanhtoan>0){
            $sql .= ",tongtien_dathanhtoan =$tongtien_dathanhtoan ";
        }
        $sql.= " where id = $id_donhang";
        pdo_execute($sql);
    }
    function huy_donhang($id_donhang){
        $sql = "Update donhang set id_trangthai =4 where id = $id_donhang";
        pdo_execute($sql);
    }
    function tongdonhang(){
        $sql = "SELECT COUNT(*) AS tongdonhang FROM donhang
        WHERE MONTH(ngaydat) = MONTH(NOW()) AND YEAR(ngaydat) = YEAR(NOW());";
        $tongdonhang = pdo_query_one($sql);
        return $tongdonhang['tongdonhang'];
    }
    function loadall_trangthaidonhang(){
        $sql = "SELECT * from trangthaidonhang where id <> 5";
        $listtrangthai = pdo_query($sql);
        return $listtrangthai;
    }

?>