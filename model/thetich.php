<?php 
    function loadall_thetich(){
        $sql = "SELECT * from thetich where 1";
        $listthetich = pdo_query($sql);
        return $listthetich;
    }
    function check_thetich($id_sanpham){
       $sql = "SELECT id_thetich from sanpham_thetich
        where id_sanpham = $id_sanpham";
        $check_thetich = pdo_query($sql);
        return $check_thetich;
    }
?>