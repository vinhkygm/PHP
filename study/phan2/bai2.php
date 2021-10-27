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
        if(isset($_POST['submit'])){
            $string = $_POST['text'];
            $array = explode(",",$string);
            $sum = 0;
            for($i =0;$i<count($array);$i++){
                $sum += $array[$i];
            }
            $result = $sum;
        }else $result = "";
    ?>
    <form action="" method="post">
        <div class="header">Nhập và tính trên dãy số</div>
        <table>
            <tr>
                <td>Nhập dãy số</td>
                <td><input type="text" name="text" value="<?php if(isset($_POST['submit'])) echo $string ?>"></td>
                <td><div class="star">(*)</div></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="submit" name="submit" value="Tổng dãy số"></td>
            </tr>
            <tr>
                <td>Tổng dãy số:</td>
                <td><input type="text" name="result" class="result" value="<?php if(isset($_POST['submit'])) echo $result ?>"></td>
            </tr>
            
        </table>
        <div class="footer"><div class="star">(*) </div>Các số được nhập cách nhau bằng dấu ","</div>
    </form>
</body>
</html>