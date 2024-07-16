<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>VNPAY RESPONSE</title>
        <!-- Bootstrap core CSS -->
        <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">         
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
    </head>
    <style>
    body {
        padding-top: 20px;
        padding-bottom: 20px;
        background-color: #f5f5f5;
    }

    .container {
        max-width: 600px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 15px;
        margin: 0 auto;
    }

    .header {
        overflow: hidden;
    }

    .header h3 {
        margin-top: 0;
        float: left;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: inline-block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    label span {
        font-weight: normal;
    }

    .table-responsive {
        margin-top: 20px;
    }

    button {
        display: inline-block;
        padding: 8px 15px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        border: 1px solid #337ab7;
        border-radius: 4px;
        color: #fff;
        background-color: #337ab7;
        margin-right: 10px;
    }

    button a {
        color: #fff;
        text-decoration: none;
    }

    footer {
        text-align: center;
        margin-top: 20px;
        padding-top: 10px;
        border-top: 1px solid #ddd;
    }
</style>


    <body>
        <?php
        require_once("./config.php");
        include "../model/pdo.php";
        include "../model/donhang.php";
        $id_donhang=$_GET['vnp_TxnRef'];
        $tongtien_dathanhtoan=$_GET['vnp_Amount']/100;
        if($_GET['vnp_ResponseCode']=="00"){
            update_donhang(2,$id_donhang,$tongtien_dathanhtoan);
            require_once("../PHPMailer/sendmail.php");
        }else{
            update_donhang(5,$id_donhang,0);
        }
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        
        unset($inputData['vnp_SecureHash']);
        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
        ?>
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>

                    <label><?php echo $_GET['vnp_TxnRef'] ?></label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label><?php echo number_format($_GET['vnp_Amount']/100,0,",",".")."<u>đ</u>" ?></label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label><?php echo $_GET['vnp_OrderInfo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                    <label><?php echo $_GET['vnp_ResponseCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label><?php echo $_GET['vnp_TransactionNo'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label><?php echo $_GET['vnp_BankCode'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label><?php echo $_GET['vnp_PayDate'] ?></label>
                </div> 
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                        <?php
                            if ($_GET['vnp_ResponseCode'] == '00') {
                                echo "<span style='color:blue'>GD Thanh cong</span>";
                            } else {
                                echo "<span style='color:red'>GD Khong thanh cong</span>";
                            }
                        ?>

                    </label>
                </div> 
                <div>
                    <button>
                    <a href="../index.php">Trang chủ</a>
                    </button>
                    <button>
                    <a href="../index.php?act=don-hang-cua-ban">Đơn hàng của bạn</a>
                    </button>
                    
                </div>
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                   <p>&copy; VNPAY <?php echo date('Y')?></p>
            </footer>
        </div>  
    </body>
</html>
