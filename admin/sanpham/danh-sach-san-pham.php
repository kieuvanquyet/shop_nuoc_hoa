<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?act=them-moi-san-pham" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                            </div>
                        </div>
                        <div >
                        <form action="index.php?act=danh-sach-san-pham" method="post">
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
                            <input style="width: 15%; float: right; border:solid 1px #dee2e6" type="submit" name="listok" value="OK">
                        </form>
                        </div>
                        <!-- //form tìm kiếm -->
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tình Trạng</th>
                                    <th>Giá Tiền</th>
                                    <th>Danh mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($listsanpham as $sanpham): 
                                        extract($sanpham);
                                        $suasp ="index.php?act=sua-san-pham&id_sanpham=$id";
                                        $danhsachbienthe ="index.php?act=danh-sach-bien-the&id_sanpham=$id";
                                        $themmoibienthe ="index.php?act=them-moi-bien-the&id_sanpham=$id";
                                        $thongbao='';
                                        if(check_thetich_in_sanpham($id)==3){
                                            $themmoibienthe="";
                                            $thongbao = "alert('Sản phẩm đã đủ biến thể, không thể thêm!')";
                                        }
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$tensp?></td>
                                    <?php 
                                        $adress_hinh = "../upload/". $hinh;
                                        if ( is_file($adress_hinh)){
                                            $hinh = '<img src="'.$adress_hinh.'" width=58" />';
                                        }else{
                                            $hinh = "No image!";
                                        }
                                    ?>
                                    <td><?=$hinh?></td>
                                    <td><?=$tongsoluong?></td>
                                    <td>
                                        <span class="badge <?=$tongsoluong==''?"bg-info":($tongsoluong==0?"bg-danger":"bg-success");?>">
                                        <?=$tongsoluong==''?"Chưa nhập biến thể":($tongsoluong==0?"Hết Hàng":"Còn Hàng");?>
                                        </span>
                                    </td>
                                    <?php 
                                        if($giamin==$giamax){
                                            $gia = number_format($giamin,0,",",".")."<u>đ</u>";
                                        }else{
                                            $gia = number_format($giamin,0,",",".")." - ".number_format($giamax,0,",",".")."<u>đ</u>";
                                        }
                                    ?>
                                    <td><?=$gia?></td>
                                    <td><?=$tendm?></td>
                                    <td>
                                        <a href="<?=$suasp?>">
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                            data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="<?=$danhsachbienthe?>">
                                            <button class="btn btn-eye btn-sm trash" type="button" title="Xem">
                                                <i class="fas fa-eye"></i>
                                            </button>   
                                        </a>
                                        <a onclick="<?=$thongbao??""?>" href="<?=$themmoibienthe?>">
                                            <button class="btn btn-add btn-sm trash" type="button" title="Thêm"
                                                ><i class="fas fa-plus"></i> 
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