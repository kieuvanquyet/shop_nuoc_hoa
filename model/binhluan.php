<?php
function loadall_binhluan($id_sanpham)
{
    $sql = "SELECT binhluan.id ,hoten,noidung,ten,ngaybinhluan FROM binhluan
    join taikhoan on taikhoan.id=binhluan.id_taikhoan
    join sanpham on sanpham.id=binhluan.id_sanpham";
    if ($id_sanpham > 0)
        $sql .= " where id_sanpham = $id_sanpham";
    $sql .= " order by binhluan.id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function insert_binhluan($id_sanpham, $text)
{
    $taikhoanDetail = $_SESSION['taikhoan'];
    $id_taikhoan = $taikhoanDetail['id'];
    $date = date('Y-m-d');
    $sql = " INSERT INTO binhluan (id_sanpham,id_taikhoan,ngaybinhluan,noidung) VALUES ('$id_sanpham','$id_taikhoan','$date','$text')";
    $result = pdo_execute($sql);
    return $result;
}
function delete_binhluan($id_sanpham)
{
    $sql = "DELETE FROM binhluan WHERE id =" . $id_sanpham;
    pdo_execute($sql);
}
?>
