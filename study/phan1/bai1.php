<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <link rel="stylesheet" href="css/bai1.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $width = $_POST['width'];
        $height = $_POST['height'];
        if ($width >= $height || $width <= 0 || $height <= 0) $area = "Nhập sai";
        else $area = $width * $height;
    } else $area = "";
    ?>
    <form action="bai1.php" method="post">
        <div class="form">
            <div class="header">Diện tích hình chữ nhật</div>
            <div class="content">
                <table>
                    <tr>
                        <td>Chiều dài</td>
                        <td><input type="text" name="height" value="<?php if (isset($_POST['height'])) echo $_POST['height']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Chiều rộng</td>
                        <td><input type="text" name="width" value="<?php if (isset($_POST['width'])) echo $_POST['width']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Diện tích</td>
                        <td><input type="text" name="area" class="result" readonly value="<?php echo $area; ?>"></td>
                    </tr>
                    
                </table>
                <div class="button"><input type="submit" name="submit" value="Tính"></div>
            </div>
            <div class="submit"></div>
        </div>
    </form>
</body>

</html>