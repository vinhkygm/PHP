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
    function searching($array, $value)
    {
        $isCheck = false;
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $value) {
                $result = "Đã tìm thấy " . $value . " tại vị trí " . $i . " trong mảng";
                $isCheck = true;
            }
        }
        if ($isCheck == false) $result = "Không tìm thấy " . $value . " trong mảng";
        return $result;
    }
    if (isset($_POST['submit'])) {
        $array = $_POST['array'];
        $findNumber = $_POST['findNumber'];
        $array2 = explode(",", $array);
        $result = searching($array2, $findNumber);
    } else {
        $result = "";
        $array2 = "";
        $findNumber = "";
        $array = "";
    }
    ?>
    <form action="bai4.php" method="post">
        <div class="header">Tìm kiếm</div>
        <table>
            <tr>
                <td>Nhập mảng</td>
                <td><input type="text" class="array" name="array" value="<?php echo $array  ?>"></td>
            </tr>
            <tr>
                <td>Nhập số cần tìm</td>
                <td><input type="text" class="findNumber" name="findNumber" value="<?php echo $findNumber ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="submit" name="submit" value="Tìm kiếm"></td>
            </tr>
            <tr>
                <td>Mảng</td>
                <td><input type="text" class="array" readonly value="<?php echo $array ?>"></td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm</td>
                <td><input type="text" class="result" readonly value="<?php echo $result; ?>"></td>
            </tr>
        </table>
        <div class="footer">(Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</div>
    </form>
</body>

</html>