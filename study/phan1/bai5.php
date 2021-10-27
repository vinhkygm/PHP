<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
    <link rel="stylesheet" href="css/bai5.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {

        $giobatdau = $_POST['giobatdau'];
        $gioketthuc = $_POST['gioketthuc'];
        $tienthanhtoan = 0;
        $giolamviec = 0;
        $gionghi = 0;
        if ($giobatdau > $gioketthuc) $tienthanhtoan = "Giời kết thúc phải > Giờ bắt đầu";
        else {
            if($giobatdau < 10 && $gioketthuc < 10 || $giobatdau >24 && $gioketthuc > 24){
                $tienthanhtoan = 0;
            }else{
                if($giobatdau<=10){
                    if($gioketthuc <=17) 
                    $tienthanhtoan = ($gioketthuc - 10) * 20000;
                    else if($gioketthuc <=24) 
                        $tienthanhtoan = ($gioketthuc - 17) * 45000 + (17 - $giobatdau) * 20000;
                        else 
                        $tienthanhtoan = (24 - 17) * 45000 + (17 - 10) * 20000;
                }else if($giobatdau <=17){
                    if($gioketthuc <=17)
                    $tienthanhtoan = ($gioketthuc - $giobatdau) * 20000;
                    else if($gioketthuc <= 24)
                        $tienthanhtoan = ($gioketthuc - 17) * 45000 + (17-$giobatdau) * 20000;
                        else
                        $tienthanhtoan = (24 - 17) *45000 + (17 - $giobatdau) * 20000;
                }else{
                    if($gioketthuc <= 24)
                    $tienthanhtoan = ($gioketthuc - $giobatdau) * 45000;
                    else 
                    $tienthanhtoan = (24 - $giobatdau) * 45000;
                }
            }
        }
    } else {
        $tienthanhtoan = "";
    }

    ?>
    <form action="bai5.php" method="post">
        <div class="form">
            <div class="header">Tính tiền Karaoke</div>
            <div class="content">
                <table>
                    <tr>
                        <td>Giờ bắt đầu</td>
                        <td><input type="text" name="giobatdau" value="<?php if (isset($_POST['giobatdau'])) echo $_POST['giobatdau']; ?>"></td>
                        <td>(h)</td>
                    </tr>
                    <tr>
                        <td>Giờ kết thúc</td>
                        <td><input type="text" name="gioketthuc" value="<?php if (isset($_POST['gioketthuc'])) echo $_POST['gioketthuc']; ?>"></td>
                        <td>(h)</td>
                    </tr>
                    <tr>
                        <td>Tiền thanh toán</td>
                        <td><input type="text" class="result" readonly value="<?php echo $tienthanhtoan; ?>"></td>
                        <td>(VNĐ)</td>
                    </tr>
                </table>
                <div class="button">
                    <button name="submit">Tính tiền</button>
                </div>
            </div>
            <div class="submit"></div>
        </div>
    </form>
</body>

</html>