
<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách Danh Mục</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="index.php?act=them-moi-danh-muc" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới danh mục</a>
                            </div>
                          </div>
                          <?php
                          if(isset($thongbao) && $thongbao!=""){
                                  echo '<p style = " color:red " >'.$thongbao.'</p>';
                          }
                          ?>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Slogan</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($listdanhmuc as $danhmuc): 
                                        extract($danhmuc);
                                    $xoadm ="index.php?act=xoa-danh-muc&id_danhmuc=$id";
                                    $suadm ="index.php?act=sua-danh-muc&id_danhmuc=$id";
                                ?>
                                <tr>
                                    <td><?=$id?></td>
                                    <td><?=$ten?></td>
                                    <td><?=$slogan?></td>
                                    <td>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="<?=$xoadm?>" ;>
                                            <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                                ><i class="fas fa-trash-alt"></i> 
                                            </button>
                                        </a>
                                        <a href="<?=$suadm?>">
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                            data-target="#ModalUP"><i class="fas fa-edit"></i></button>
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