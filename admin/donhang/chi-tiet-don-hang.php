<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="index.php?act=danh-sach-don-hang"><b>Danh sách đơn hàng</b></a></li>
                <li class="breadcrumb-item"><a href="#">Chi tiết đơn hàng</a></li>   
            </ul>
            <div id="clock"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <style>
                        .chitietdonhang{
                            width:50%;
                        }
                        .list{
                            padding: 0;
                            margin: 0;
                        }
                        .list li{
                            list-style-type:none;
                            padding: 0;
                            margin: 0;
                        }
                        .list p{
                            padding: 0;
                            margin: 0;
                        }
                    </style>
                    <div class="chitietdonhang" style="width:50%;padding:20px">
                        <h5>Thông tin đơn hàng</h5>
                        <ul class="list">
                            <p><b>Tên người nhận:</b><?=" ".$ttdonhang['ten_nguoinhan']??""?></p>
                            <li><b>Email:</b><?=" ".$ttdonhang['email_nguoinhan']??""?></li>
                            <li><b>Số điện thoại:</b><?=" ".$ttdonhang['sdt_nguoinhan']??""?></li>
                            <li><b>Ngày đặt hàng:</b><?=" ".date("d/m/Y", strtotime($ttdonhang['ngaydat']))??""?></li>
                            <li><b>Phương thức thanh toán:</b><?=" ".$ttdonhang['pttt']??""?></li>
                            <li><b>Tổng tiền đơn hàng:</b><?=" ".number_format($ttdonhang['tongtien'],0,",",".")."<u>đ</u>"??""?></li>
                            <li><b>Đã thanh toán:</b><?=" ".number_format($ttdonhang['tongtien_dathanhtoan'],0,",",".")."<u>đ</u>"??""?></li>
                            <li><b>Số tiền còn phải thanh toán:</b><?=" ".number_format($ttdonhang['tongtien']-$ttdonhang['tongtien_dathanhtoan'],0,",",".")."<u>đ</u>"??""?></li>
                            <li><b>Địa chỉ:</b></li>
                            <li><?=$ttdonhang['diachi_nguoinhan']??""?></li>
                            <li><b>Ghi chú:</b></li>
                            <li><?=$ttdonhang['ghichu']??""?></li>
                        </ul>
                    </div>
                    <div class="tile-body">
                        <div class="row element-button">
                        </div>
                        <!-- //form tìm kiếm -->
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Dung tích</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($list_dhct as  $key=> $dhct): 
                                        extract($dhct);
                                ?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$ten?></td>
                                    <td><img src="../upload/<?=$hinh?>" alt="" width="80px"></td>
                                    <td><?=$thetich?></td>
                                    <td><?=$soluong?></td>
                                    <?php $giatien=$soluong*$gia?>
                                    <td><?=number_format($giatien,0,",",".")."<u>đ</u>"?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="Place-order mt-25" style="text-align:left">
                        <a class="btn btn--lg btn-primary my-2 my-sm-0" href="index.php?act=danh-sach-don-hang" >Danh sách đơn hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </main>