<?php
function loadall_taikhoan($kyw,$capbac)
{
    $sql = "SELECT * FROM taikhoan";
    if($kyw!=""){
        $sql .= " Where hoten like '%$kyw%'";
    }
    if($capbac!=""){
        $sql .=" Where capbac =$capbac";
    }
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($hoten, $email, $matkhau)
{
    $sql = "INSERT INTO taikhoan(hoten,email,matkhau)values ('$hoten','$email','$matkhau')";
    pdo_execute($sql);
}
function checkemail_dangky($email){
    $sql = "SELECT * FROM taikhoan WHERE email = '$email'";
    $checkmail_dangky = pdo_query($sql);
    return $checkmail_dangky;    
}
function loadone_taikhoan($id)
{
    $sql = "SELECT * FROM taikhoan where id=" . $id;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function update_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi, $capbac)
{
    $sql = "UPDATE taikhoan SET hoten='$hoten' ,email='$email',
     sdt='$sdt', matkhau='$matkhau',diachi= '$diachi', capbac=$capbac WHERE id=$id";
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id=$id";
    pdo_execute($sql);
}

function check_user($hoten ,$matkhau)
{
    $sql = "SELECT * FROM taikhoan WHERE hoten='".$hoten."' AND matkhau='".$matkhau."'";
    $user = pdo_query_one($sql);
    return $user;
}
function edit_taikhoan($id, $hoten, $email, $sdt, $matkhau, $diachi)
{
    $sql = "UPDATE taikhoan SET hoten='$hoten' ,email='$email',
     sdt='$sdt', matkhau='$matkhau',diachi= '$diachi' WHERE id=$id";
    pdo_execute($sql);
}
function checkemail($email)
{
    $sql = "SELECT *FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function isEmail($email){
    $checkEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
    return $checkEmail;
}
function tongtaikhoan(){
    $sql = "select count(*) as tongtk from taikhoan";
        $tongtk = pdo_query_one($sql);
        return $tongtk['tongtk'];
}
function insert_taikhoan_admin($hoten,$email,$sdt,$matkhau,$diachi,$capbac){
    $sql = "INSERT INTO `taikhoan`(hoten,email,sdt,matkhau,diachi,capbac) VALUES('$hoten','$email','$sdt','$matkhau','$diachi',$capbac) ";
    pdo_execute($sql);
}
?>