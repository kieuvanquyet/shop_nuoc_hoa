<style>
.form-timkiem {
  display: flex;
  max-width: 400px;
  margin: 20px auto;
  margin-left: 0; /* Thêm lề trái 20px */
}

.listtrangthai {
  flex: 1;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px 0 0 5px;
}

.timkiemtrangthai {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 0 5px 5px 0;
  transition: background-color 0.3s ease;
}

.timkiemtrangthai:hover {
  background-color: #0056b3;
}

/* Hiệu ứng hover cho dropdown */
.listtrangthai:hover {
  background-color: #f2f2f2;
}


</style>
<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="form-timkiem">
                            <form action="" method="post">
                                <select name="id_trangthai" class="listtrangthai">
                                    <option value="">Tất Cả</option>
                                    <option value="1">Chờ xử lý</option>
                                    <option value="2" >Đã xác nhận</option>
                                    <option value="3" >Đang vận chuyển</option>
                                    <option value="4" >Đã hoàn thành</option>
                                    <option value="5" >Hủy</option>
                                </select>
                                <input class="timkiemtrangthai" type="submit" name="listok" value="Tìm kiếm">
                            </form>
                        </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Người Nhận</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Trạng Thái</th>
                                    <th>Ngày Đặt</th>
                                    <th>Tổng Tiền</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($list_dh as $dh): 
                                        extract($dh);
                                        $dhct="index.php?act=chi-tiet-don-hang&id_donhang=$id";
                                        $thaydoi_ttdh ="index.php?act=sua-trang-thai-don-hang&id_donhang=$id";
                                        $huy="";
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$ten_nguoinhan?></td>
                                    <td><?=$pttt?></td>
                                    <style>
                                        .bg-xacnhan{
                                            background-color:rgba(255, 69, 0, 0.2);
                                            color:rgba(255, 69, 0, 0.7);
                                        }
                                    </style>
                                    <?php 
                                        $class_ttdh ="";
                                        switch ($trangthai_dh) {
                                            case 'Chờ xử lý':
                                                $class_ttdh ="bg-info";
                                                break;
                                            case 'Đã xác nhận';
                                                $class_ttdh= "bg-xacnhan";
                                                break;
                                            case 'Đang vận chuyển':
                                                $class_ttdh ="bg-warning";
                                                break;
                                            case 'Đã hoàn thành':
                                                $class_ttdh = "bg-success";
                                                break;
                                            case 'Đã hủy':
                                                $class_ttdh = "bg-danger";
                                                break;
                                        }
                                        // $noidung = '" Bạn chắn chắn muốn thay đổi trạng thái đơn hàng chứ ?"';
                                        // $kiemtra = "onclick='return confirm(".$noidung.")'";
                                        // $checkhuy ="return confirm('Bạn chắc chắn muốn hủy đơn hàng chứ ?')";
                                        // $huy= "index.php?act=huy-don-hang&id_donhang=$id";

                                        // if($id_trangthai==3){
                                        //     $noidung = '"Đơn hàng đã hoàn thành"';
                                        //     $kiemtra = "onclick='return alert(".$noidung.")'";
                                        //     $checkhuy="return alert('Đơn hàng đã hoàn thành không thể hủy')";
                                        //     $huy='';
                                        // }else if($id_trangthai==4){
                                        //     $noidung = '"Đơn hàng đã bị hủy"';
                                        //     $kiemtra = "onclick='return alert(".$noidung.")'";
                                        //     $checkhuy="return alert('Đơn hàng này đã được hủy trước đó')";
                                        //     $huy='';
                                        // }
                                        // if($id_pttt==2){
                                        //     $checkhuy="return alert('Thanh toán bằng Vnpay không thể hủy')";
                                        //     $huy='';
                                        // }

                                    ?>
                                    <td><span class="badge <?=$class_ttdh?>"><?=$trangthai_dh?></span></td>
                                    <td><?=date("d/m/Y", strtotime($ngaydat))?></td>
                                    <td><?=number_format($tongtien,0,",",".")."<u>đ</u>"?></td>
                                    <td>
                                        <a href="<?=$thaydoi_ttdh?>">
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Thay đổi trạng thái" id="show-emp" data-toggle="modal"
                                            data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <a href="<?=$dhct?>">
                                            <button class="btn btn-add btn-sm trash" type="button" title="Xem chi tiết">
                                                <i class="fas fa-eye"></i>
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