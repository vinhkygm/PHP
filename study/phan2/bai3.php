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
    function tao_mang($n)
    {
        for ($i = 0; $i < $n; $i++) {
            $array[$i] = rand(0, 20);
        }
        return $array;
    }
    function xuat_mang($n, $array)
    {
        for ($i = 0; $i < $n; $i++) {
            if ($i == 0) echo $array[$i];
            else echo ", " . $array[$i];
        }
    }
    function GTLN($n, $array)
    {
        $max = $array[0];
        for ($i = 0; $i < $n; $i++) {
            if ($max < $array[$i]) $max = $array[$i];
        }
        return $max;
    }
    function GTNN($n, $array)
    {
        $min = $array[0];
        for ($i = 0; $i < $n; $i++) {
            if ($min > $array[$i]) $min = $array[$i];
        }
        return $min;
    }
    function tong($n, $array)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum += $array[$i];
        }
        return $sum;
    }
    if (isset($_POST['submit'])) {
        $n = $_POST['input'];
        $sum = 0;
        if ($n != 0) $array = tao_mang($n);
    } else {
        $array = "";
        $max = "";
        $min = "";
        $sum = "";
    }
    ?>
    <form action="" method="post">
        <div class="header">Phát sinh mảng và tính toán</div>
        <table>
            <tr class="trow">
                <td>Nhập số phần tử</td>
                <td><input type="text" name="input" size="25" value="<?php if (isset($_POST['submit'])) echo $_POST['input'] ?>"></td>
            </tr>
            <tr class="trow">
                <td></td>
                <td><input type="submit" name="submit" value="Phát sinh mảng và tính toán"></td>
            </tr>
            <tr>
                <td>Mảng</td>
                <td><input type="text" class="inputFix" readonly size="40" value="<?php if (isset($_POST['submit'])) xuat_mang($n, $array);
                                                                                    else "" ?>"></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td><input type="text" class="inputFix" readonly value="<?php if (isset($_POST['submit'])) echo GTLN($n, $array);
                                                                        else echo "" ?>"></td>
            </tr>
            <tr>
                <td>GTNN (MIN) trong mảng:</td>
                <td><input type="text" class="inputFix" readonly value="<?php if (isset($_POST['submit'])) echo GTNN($n, $array);
                                                                        else echo "" ?>"></td>
            </tr>
            <tr>
                <td>Tổng mảng</td>
                <td><input type="text" class="inputFix" readonly value="<?php if (isset($_POST['submit'])) echo tong($n, $array);
                                                                        else echo "" ?>"></td>
            </tr>
        </table>
        <div class="footer">(<span>Ghi chú:</span> Các phần tử trong mảng sẽ có giá trị từ 0 - 20</div>
    </form>
</body>

</html>