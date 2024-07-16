<?php 
    function loadall_giohang($id){
        $sql = "select id_sanpham_thetich, giohang.id ,hinh,ten,thetich,sanpham_thetich.soluong as conlai ,giohang.soluong,gia from giohang 
        join sanpham_thetich on giohang.id_sanpham_thetich =  sanpham_thetich.id
        join sanpham on sanpham.id = sanpham_thetich.id_sanpham
        join thetich on thetich.id = sanpham_thetich.id_thetich
        where id_taikhoan=$id";
        $giohang = pdo_query($sql);
        return $giohang; 
    }
    function mua1_giohang($id_taikhoan,$id_giohang){
        $sql = "select id_sanpham_thetich ,giohang.id ,hinh,ten,thetich,sanpham_thetich.soluong as conlai ,giohang.soluong,gia from giohang 
        join sanpham_thetich on giohang.id_sanpham_thetich =  sanpham_thetich.id
        join sanpham on sanpham.id = sanpham_thetich.id_sanpham
        join thetich on thetich.id = sanpham_thetich.id_thetich
        where id_taikhoan=$id_taikhoan and giohang.id=$id_giohang";
        $giohang = pdo_query($sql);
        return $giohang; 
    }
    function load_giohang_duocchon($id_giohang,$id_taikhoan){
        $id_gh="";
        foreach($id_giohang as $value){
            $id_gh .= $value . ", ";
        }
        $id_gh = rtrim($id_gh, ", ");
        $sql = "SELECT id_sanpham_thetich, giohang.id ,hinh,ten,thetich,sanpham_thetich.soluong as conlai ,giohang.soluong,gia from giohang 
        join sanpham_thetich on giohang.id_sanpham_thetich =  sanpham_thetich.id
        join sanpham on sanpham.id = sanpham_thetich.id_sanpham
        join thetich on thetich.id = sanpham_thetich.id_thetich
        where id_taikhoan=$id_taikhoan and giohang.id in ($id_gh)";
        $listsp =pdo_query($sql);
        return $listsp;
    }
    function insert_giohang($id_sanpham_thetich,$soluong,$id_taikhoan){
        $sql= "INSERT INTO giohang(id_sanpham_thetich,soluong,id_taikhoan) 
            VALUES ($id_sanpham_thetich,$soluong,$id_taikhoan)";
        pdo_execute($sql); 
    }
    function check_giohang($id_sanpham_thetich,$id_taikhoan){
        $sql="SELECT * FROM `giohang` 
        WHERE id_sanpham_thetich =$id_sanpham_thetich and id_taikhoan =$id_taikhoan";
        $check= pdo_query_one($sql);
        return $check;
    }
    function update_giohang($soluong,$id){
        $sql= "UPDATE giohang SET soluong =$soluong where id =$id";
        pdo_execute($sql); 
    }
    function check_soluong_cart($id_taikhoan){
        $sql="SELECT count(id) as tongsoluong FROM giohang 
        where id_taikhoan =$id_taikhoan";
        $check= pdo_query_one($sql);
        return $check['tongsoluong'];
    }
    function tong_gia_don_hang($id_taikhoan,$id_giohang){
        $id_gh=$id_giohang;
        if(is_array($id_giohang)){
            $id_gh="";
            foreach($id_giohang as $value){
                $id_gh .= $value . ", ";
            }
        }
        $id_gh = rtrim($id_gh, ", ");
        $sql="SELECT sum(giohang.soluong*gia) as tonggia FROM giohang 
        join sanpham_thetich on giohang.id_sanpham_thetich =  sanpham_thetich.id
        where id_taikhoan =$id_taikhoan and giohang.id in ($id_gh)";
        $check= pdo_query_one($sql);
        return $check['tonggia'];
    }
    function delete_giohang($id){
        if($id>0){
            $sql = "delete from giohang where id=".$id;
            pdo_execute($sql);
        }
    }
?>