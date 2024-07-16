<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản lý tài khoản</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?act=them-moi-tai-khoan" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm mới tài khoản</a>
                            </div>
                        </div>
                        <form action="index.php?act=quan-ly-tai-khoan" method="post">
                            <select name="capbac" id="" style="height: 26px; margin-left: 10px; border:solid 1px #dee2e6">
                                <option value="">Tất Cả</option>
                                <option value="1">Admin</option>
                                <option value="0" >Người Dùng</option>
                            </select>
                            <input style="width: 75%; float: left;border:solid 1px #dee2e6; padding-left:10px" placeholder="Tìm kiếm tên đăng nhập..." type="text" name="kyw" id="" >
                            <input style="width: 15%; float: right; backgroud-color:blue; border:solid 1px #dee2e6" type="submit" name="listok" value="OK">
                        </form>
                        <div style="color:red">
                            <?=$_COOKIE['thongbao']??""?>
                        </div>
                    <div class="item-taikhoan">
                        <table>
                            <tr>
                                <!-- <th></th> -->
                                <th>#</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Điện thoại</th>
                                <th>Mật khẩu</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Chức năng</th>
                                <br>
                            </tr>
                                <?php
                            foreach ($listtaikhoan as $tk) {
                                
                                extract($tk);
                                $suataikhoan = "index.php?act=sua-tai-khoan&id=" . $id;
                                $xoataikhoan = "index.php?act=xoa-tai-khoan&id=" . $id;
                                if($capbac==1){
                                    $vaitro="Admin";
                                }else{
                                    $vaitro="Người dùng
                                    ";
                                }
                                echo 
                                '<tr>
                                <td>'. $id.'</td>
                                <td>'.$hoten.' </td>
                                <td>'.$email.'</td>
                                <td>'. $sdt .'</td>
                                <td>'. $matkhau .'</td>
                                <td>'. $diachi .'</td>
                                <td> '.$vaitro .'</td>
                                
                                <td>
                        
                                    <a href="'.$suataikhoan.'"> <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i> 
                        
                                </td>
                                </tr>';
                                
                                
                            }
                            ?>
                        </table>
        
                    </div>
                </div>  
            </div>                
    </main>
    
