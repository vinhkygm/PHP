<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
    <link rel="stylesheet" href="css/bai2.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $bankinh = $_POST['bankinh'];
        $pi = 3.14;
        if ($bankinh <= 0) {
            $dientich = "Nhập sai bán kinh";
            $chuvi = "Nhập sai bán kinh";
        } else {
            $dientich = $pi * $bankinh * $bankinh;
            $chuvi = 2 * $pi * $bankinh;
        }
    } else {
        $dientich = "";
        $chuvi = "";
    };
    ?>
    <form action="bai2.php" method="post">
        <div class="form">
            <div class="header">Diện tích và chu vi hình chữ nhật</div>
            <div class="content">
                <table>
                    <tr>
                        <td>Bán kính</td>
                        <td><input type="text" name="bankinh" value="<?php if (isset($_POST['bankinh'])) echo $_POST['bankinh']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Diện tích</td>
                        <td><input type="text" name="dientich" class="result" readonly value="<?php echo $dientich; ?>"></td>
                    </tr>
                    <tr>
                        <td>Chu vi</td>
                        <td><input type="text" name="chuvi" class="result" readonly value="<?php echo $chuvi; ?>"></td>
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