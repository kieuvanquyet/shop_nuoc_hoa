


    <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách bình luận</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div >
                        <!-- <form action="index.php?act=danh-sach-san-pham" method="post">
                            <select name="iddm" id="" style="height: 26px; margin-left: 10px; border:solid 1px #dee2e6">
                                <option value="0" selected>Tất Cả</option>
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$ten.'</option>';
                                }
                                ?>
                            </select>
                            <input style="width: 75%; float: left;border:solid 1px #dee2e6" type="text" name="kyw" id="">
                            <input style="width: 15%; float: right; backgroud-color:blue; border:solid 1px #dee2e6" type="submit" name="listok" value="OK">
                        </form> -->
                        </div>
                        <!-- //form tìm kiếm -->
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nội dung bình luận</th>
                                <th>Tên sản phẩm</th>
                                <th>Tên người dùng</th>
                                <th>Ngày bình luận</th>
                                <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($listbinhluan as $binhluan):
                                        extract($binhluan);
                                        $xoabl = "index.php?act=xoabl&id=" . $id;
                                    
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$noidung?></td>
                                    <td><?=$ten?></td>
                                    <td><?=$hoten?></td>
                                    <td><?=$ngaybinhluan?></td>
                                    
                                    <td>
                                        <a href="<?=$xoabl?>" onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')";>
                                            <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                ><i class="fas fa-trash-alt"></i> 
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>