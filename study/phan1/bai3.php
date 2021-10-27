<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
    <link rel="stylesheet" href="css/bai3.css">
</head>

<body>
    <?php
    $dongia = 20000;
    if (isset($_POST['submit'])) {
        $chisomoi = $_POST['chisomoi'];
        $chisocu = $_POST['chisocu'];
        if(isset($_POST['dongia'])){
            $thanhtoan = ($chisomoi - $chisocu)*$_POST['dongia'];
        }else{
            $thanhtoan = ($chisomoi - $chisocu)*20000;
        }
    }else $thanhtoan = '';
   
    ?>
    <form action="bai3.php" method="post">
        <div class="form">
            <div class="header">Thanh toán tiền điện</div>
            <div class="content">
                <table>
                    <tr>
                        <td>Tên chủ hộ</td>
                        <td><input type="text" name="tenchuho" value="<?php if (isset($_POST['tenchuho'])) echo $_POST['tenchuho']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Chỉ số cũ</td>
                        <td><input type="text" name="chisocu" value="<?php if (isset($_POST['chisocu'])) echo $_POST['chisocu']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Chỉ số mới</td>
                        <td><input type="text" name="chisomoi" value="<?php if (isset($_POST['chisomoi'])) echo $_POST['chisomoi']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Đơn giá</td>
                        <td><input type="text" name="dongia"  value="<?php if(isset($_POST['dongia'])) echo $_POST['dongia']; else echo $dongia?>"></td>
                    </tr>
                    <tr>
                        <td>Số tiền thanh toán</td>
                        <td><input type="text" class="result" readonly value="<?php echo $thanhtoan; ?>"></td>
                    </tr>

                </table>
                <div class="button">
                    <button name="submit">Tính</button>
                </div>
            </div>
            <div class="submit"></div>
        </div>
    </form>
</body>

</html>