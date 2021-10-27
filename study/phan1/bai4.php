<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
    <link rel="stylesheet" href="css/bai4.css">
</head>

<body>
    <?php
        $diemchuan = 20;
        if(isset($_POST['submit']))
        {
            $diemtoan = $_POST['diemtoan'];
            $diemly = $_POST['diemly'];
            $diemhoa = $_POST['diemhoa'];
            $tongdiem = $diemtoan + $diemly + $diemhoa;
            if($diemtoan > 0 && $diemly > 0 && $diemhoa > 0 && $tongdiem >= $diemchuan){
                $ketquathi = 'Đậu';
            }else $ketquathi = 'Rớt';
        }
        else{
            $tongdiem = "";
            $ketquathi = "";
        }
        
    ?>
    <form action="bai4.php" method="post">
        <div class="form">
            <div class="header">Kết quả thi đại học</div>
            <div class="content">
                <table>
                    <tr>
                        <td>Toán</td>
                        <td><input type="text" name="diemtoan" value="<?php if (isset($_POST['diemtoan'])) echo $_POST['diemtoan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Lý</td>
                        <td><input type="text" name="diemly" value="<?php if (isset($_POST['diemly'])) echo $_POST['diemly']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Hóa</td>
                        <td><input type="text" name="diemhoa" value="<?php if (isset($_POST['diemhoa'])) echo $_POST['diemhoa']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Điểm chuẩn</td>
                        <td><input type="text" class="result" readonly value="<?php echo $diemchuan;?>"></td>
                    </tr>
                    <tr>
                        <td>Tổng điểm</td>
                        <td><input type="text" class="result" readonly value="<?php echo $tongdiem; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kết quả thi</td>
                        <td><input type="text" class="result" readonly value="<?php echo $ketquathi; ?>"></td>
                    </tr>

                </table>
                <div class="button">
                    <button name="submit">Xem kết quả</button>
                </div>
            </div>
            <div class="submit"></div>
        </div>
    </form>
</body>

</html>