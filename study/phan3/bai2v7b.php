<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list_chi_tiet</title>
    <link rel="stylesheet" href="css/bai2v7b.css">
</head>
<body>
    <?php
            require("./configBai2.php");
            $conn = new mysqli($hostname,$username,$password,$dbname);
            $maSua = $_GET['masp'];
            $query = "SELECT * FROM sua A, hang_sua B WHERE Ma_sua = '$maSua' && A.Ma_hang_sua = B.Ma_hang_sua";
            $result = $conn->query($query);
            $ketQua = $result->fetch_assoc();
    ?>
    <table border="1">
        <div class="header">
            <?=  $ketQua['Ten_sua'].' - '.$ketQua['Ten_hang_sua'] ?>
        </div>
        <div class="content">
            <tr>
                <td><img src="img/Hinh_sua/<?= $ketQua['Hinh'] ?>" alt=""></td>
                <td class="text">
                    <div class="thanhphandinhduong">
                        <span>Thành phần dinh dưỡng</span>
                        <div class="content"><?= $ketQua['TP_Dinh_Duong'] ?></div>
                    </div>
                    <div class="loiich">
                       <span>Lợi ích</span>
                        <div class="content"><?= $ketQua['Loi_ich'] ?></div>
                    </div>
                    <div class="subInfo">
                        <span>Trọng lượng: </span> <?= $ketQua['Trong_luong']?> gr - <span>Đơn giá: </span><?= $ketQua['Don_gia'] ?> VND
                    </div>
                </td>
            </tr>
            <tr>
                <td class="back"><a href="javascript:window.history.back(-1);">Quay về</a></td>
            </tr>
        </div>
    </table>
</body>
</html>