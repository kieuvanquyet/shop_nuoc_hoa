<?php
    function loadall_sanpham_thetich($id_sanpham){
        $sql = "SELECT sanpham_thetich.id, sanpham.id as idsp ,sanpham_thetich.id_thetich,sanpham.ten ,hinh ,mota,xuatxu,phongcach,thetich,soluong ,gia,trangthai ,danhmuc.ten as tendm from sanpham_thetich
                join thetich on thetich.id = sanpham_thetich.id_thetich
                join sanpham on sanpham.id = sanpham_thetich.id_sanpham
                join danhmuc on danhmuc.id = sanpham.iddm
                where sanpham_thetich.id_sanpham = $id_sanpham ";
                $listchitiet = pdo_query($sql);
                return $listchitiet;
    }
    function loadall_sanpham_thetich_view($id_sanpham){
        $sql = "SELECT sanpham_thetich.id, sanpham.id as idsp ,sanpham_thetich.id_thetich,sanpham.ten ,hinh ,thetich,soluong ,gia,trangthai ,danhmuc.ten as tendm ,mota,xuatxu,phongcach from sanpham_thetich
                join thetich on thetich.id = sanpham_thetich.id_thetich
                join sanpham on sanpham.id = sanpham_thetich.id_sanpham
                join danhmuc on danhmuc.id = sanpham.iddm
                where sanpham_thetich.id_sanpham = $id_sanpham and trangthai =1";
                $listchitiet = pdo_query($sql);
                return $listchitiet;
    }
    function loadone_sanpham_thetich($id){
        $sql = "select *,sanpham_thetich.id as id_sp_tt,ten,thetich,gia from sanpham_thetich 
        join thetich on thetich.id = sanpham_thetich.id_thetich
        join sanpham on sanpham.id =sanpham_thetich.id_sanpham
        where sanpham_thetich.id = $id ";
        $sp_tt = pdo_query_one($sql);
        return $sp_tt;
    }
    function insert_sanpham_thetich($id_sanpham, $id_thetich, $gia , $soluong){
        $sql= "INSERT INTO sanpham_thetich(id_sanpham, id_thetich, gia, soluong) VALUES ($id_sanpham, $id_thetich, $gia , $soluong)";
        pdo_execute($sql); 
    }
    function update_sanpham_thetich($id,$id_sanpham, $id_thetich, $gia , $soluong){
        $sql ="update sanpham_thetich set id_sanpham = $id_sanpham , id_thetich= $id_thetich , gia = $gia , soluong = $soluong where id = $id";
        pdo_execute($sql);
    }
    function delete_sanpham_thetich($id){
        $sql ="update sanpham_thetich set trangthai = 2 where id = $id";
        pdo_execute($sql);
    }
    function restore_sanpham_thetich($id){
        $sql ="update sanpham_thetich set trangthai = 1 where id = $id";
        pdo_execute($sql);
    }
    function insert_sanpham($ten, $hinh, $xuatxu , $phongcach , $mota, $iddm){
        $sql= "INSERT INTO sanpham(ten,hinh,xuatxu,phongcach,mota,iddm) 
        VALUES ('$ten', '$hinh', '$xuatxu' , '$phongcach' , '$mota', $iddm)";
        pdo_execute($sql); 
    }
    function loadall_sanpham($kyw,$iddm =0){
        $sql = "SELECT sanpham.id,sanpham_thetich.id as id_bienthe ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.id = sanpham_thetich.id_sanpham  
        left join thetich on thetich.id = sanpham_thetich.id_thetich
        join danhmuc on sanpham.iddm = danhmuc.id ";
        if($iddm>0){
            $sql .=" where iddm=$iddm";
        }
        if($kyw!=""){
           $sql .= " where sanpham.ten like '%$kyw%'";
        }
        $sql .= " group by sanpham.id order by sanpham.id asc ";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql = "select * from sanpham where id=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function update_sanpham($id,$ten, $hinh, $xuatxu , $phongcach , $mota, $iddm){
        $sql= "update sanpham set ten = '$ten' , xuatxu = '$xuatxu', phongcach ='$phongcach', mota = '$mota', iddm = $iddm";
        if($hinh!=''){
           $sql.=",hinh = '$hinh'" ;
        }
        $sql.=" where id = $id ";
       
        pdo_execute($sql);
    }
    
    function top5_sanphamnew_in_danhmuc($iddm){
        $sql = "SELECT slogan,sanpham.id ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.id = sanpham_thetich.id_sanpham  
        left join thetich on thetich.id = sanpham_thetich.id_thetich
        join danhmuc on sanpham.iddm = danhmuc.id
        where iddm = $iddm and trangthai = 1
        group by sanpham.id
        order by sanpham.id asc 
        limit 5 ";
        $spnew = pdo_query($sql);
        return $spnew;
    }
    function cac_sp_lienquan($iddm,$id_sanpham){
        $sql = "SELECT slogan,sanpham.id ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.id = sanpham_thetich.id_sanpham  
        left join thetich on thetich.id = sanpham_thetich.id_thetich
        join danhmuc on sanpham.iddm = danhmuc.id
        where iddm = $iddm and trangthai = 1 and sanpham.id <> $id_sanpham
        group by sanpham.id
        order by sanpham.id asc ";
        $splq = pdo_query($sql);
        return $splq;
    }
    function load_thetich_in_sanpham($id){
        $sql = "select sanpham_thetich.id, thetich,gia from sanpham_thetich 
        join thetich on thetich.id = sanpham_thetich.id_thetich
        where id_sanpham = $id and trangthai =1";
        $thetich = pdo_query($sql);
        return $thetich; 
    }
    function hinhanh_sanpham($id_sanpham){
        $sql = "SELECT hinh FROM  sanpham 
        WHERE sanpham.id = $id_sanpham";
        $hinh = pdo_query_one($sql);
        return $hinh['hinh'];
    }
    function loadall_sanpham_thetich_chitiet($iddm=0,$loc=0,$kyw){
        $sql = "SELECT slogan,sanpham.id ,sanpham.ten as tensp ,danhmuc.ten as tendm,hinh,xuatxu,phongcach,mota,soluong ,gia,sum(soluong) as tongsoluong ,max(gia) as giamax,min(gia) as giamin from sanpham
        left join sanpham_thetich on sanpham.id = sanpham_thetich.id_sanpham  
        left join thetich on thetich.id = sanpham_thetich.id_thetich
        join danhmuc on sanpham.iddm = danhmuc.id
        where trangthai = 1 ";
        if($iddm>0){
            $sql .=" and iddm =$iddm";
        }
        if($kyw!=""){
            $sql .=" and sanpham.ten like '%$kyw%'";
        }
        $sql .=" group by sanpham.id";
        switch ($loc) {
            case 'sap-xep-tang':
                $sql .=" order by sanpham.ten asc ";
                break;
            case 'sap-xep-giam':
                $sql .=" order by sanpham.ten desc ";
                break;
            case 'gia-tang-dan':
                $sql .=" order by giamin asc ";
                break;
            case 'gia-giam-dan':
                $sql .=" order by giamin desc ";
                break;
            case 0: 
                $sql .=" order by sanpham.id asc ";
        }
        
        
        $spnew = pdo_query($sql);
        return $spnew;
    }
    //tổng kho của 1 biến thể
    function check_tongkho($id_sanpham_thetich){
        $sql = "select soluong from sanpham_thetich";
        $tongkho = pdo_query_one($sql);
        return $tongkho['soluong'];  
    }function tongsanpham(){
        $sql = "select sum(soluong) as tongsp from sanpham_thetich";
        $tongsp = pdo_query_one($sql);
        return $tongsp['tongsp'];
    }
    function sanphamsaphet(){
        $sql = "select count(*) as tongspsaphet from sanpham_thetich
        where soluong <=10 ";
        $sp = pdo_query_one($sql);
        return $sp['tongspsaphet'];
    }
    function check_gia_ten_thetich_in_sp_tt($id_sanpham_thetich){
        $sql = "SELECT gia,ten,thetich from sanpham_thetich
        join sanpham on sanpham_thetich.id_sanpham = sanpham.id
        join thetich on sanpham_thetich.id_thetich =thetich.id
        where sanpham_thetich.id=$id_sanpham_thetich";
        $sptt = pdo_query_one($sql);
        return $sptt;
    }
    function check_thetich_in_sanpham($id_sanpham){
        $sql = "select count(*) tongthetich from sanpham_thetich
        where id_sanpham =$id_sanpham";
        $sp = pdo_query_one($sql);
        return $sp['tongthetich'];
    }
?>