<?php session_start();
     include "../global.php";
     include "../model/giohang.php";
     include "../model/taikhoan.php";
     include "../model/pdo.php";
    $listgiohang =loadall_giohang($taikhoan['id']);
    foreach($listgiohang as $giohang):
        extract($giohang);
    
?>
    <tr>
                <td class="text-center"><input  type="checkbox" name="id_giohang[]" class="checkbox" value="<?=$id?>" checked></td>
                <td class="text-center" scope="row">
                  <img src="upload/<?=$hinh?>" alt="img" />
                </td>
                <td class="text-center">
                  <span class="whish-title"><?=$ten?></span>
                </td>
                <td class="text-center">
                  <span class="whish-title"><?=$thetich?></span>
                </td>
                <td class="text-center">
                  <span class="badge badge-danger position-static"><?=$conlai?></span>
                </td>
                <td class="text-center">
                  <span class="whish-title"><?=number_format($gia,0,",",".")."<u>đ</u>"?></span>
                </td>
                <td class="text-center">
                  <div class="style">
                    <div class="count d-flex justify-content-center">
                      <input id="soluong_<?=$id?>" type="number" min="1" max="<?=$conlai?>" step="1" value="<?=$soluong?>" oninput="updateSoLuong(<?=$id?>,<?=$conlai?>)" />
                      <div class="button-group">
                        <!-- <button class="count-btn increment">
                          <i class="fas fa-chevron-up"></i>
                        </button>
                        <button class="count-btn decrement">
                          <i class="fas fa-chevron-down"></i>
                        </button> -->
                      </div>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <span class="whish-list-price"> <?=number_format($gia*$soluong,0,",",".")."<u>đ</u>"?></span>
                </td>

                <td class="text-center">
                  <a href="index.php?act=xoagiohang&id_giohang=<?=$id?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này chứ ?')">
                    <span class="trash"><i class="fas fa-trash-alt"></i> </span>
                  </a>
                </td>
                <td class="text-center">
                  <a href="index.php?act=thanhtoan&id_giohang=<?=$id?>" class="btn btn-dark btn--lg">Đặt Hàng</a>
                </td>
              </tr>
    <?php endforeach ?>
    <!-- <tr style="background:#F0F8FF;">
                <td class="text-center"  colspan="7" ><h4 style="font-weight: bold;color:#191970">Tổng Tiền Hàng:</h4></td>
                <td class="text-center"  colspan="2"><h5 style="font-weight: bold;color:#191970" ><?=number_format($tongtien,0,",",".")."<u>đ</u>"??""?></h5></td>
              </tr> -->