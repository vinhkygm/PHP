<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 6</title>
    <link rel="stylesheet" href="css/bai6.css">
</head>

<body>
    <?php
        if(isset($_POST['submit']))
        {
            $firstNumber = $_POST['firstNumber'];
            $secondNumber = $_POST['secondNumber'];
            $sign = $_POST['sign'];
            switch($sign){
                case "Cộng": $result = $firstNumber + $secondNumber; break;
                case "Trừ": $result = $firstNumber - $secondNumber; break;
                case "Nhân": $result = $firstNumber * $secondNumber; break;
                case "Chia": if($secondNumber == 0) { $result ="Không thể chia cho 0"; break;}
                else $result = $firstNumber / $secondNumber; break;
            }
        }
        else{

        }

    ?>
    <form action="bai6b.php" method="post">
        <div class="header">Phép tính trên hai số</div>
        <table>
            <tr class="chonPhepTinhSection">
                <td class="headerChonPhepTinh">Chọn phép tính</td>
                <td>
                    <input type="radio" name="sign" value="Cộng" checked>Cộng
                    <input type="radio" name="sign" value="Trừ">Trừ
                    <input type="radio" name="sign" value="Nhân">Nhân
                    <input type="radio" name="sign" value="Chia">Chia
                </td>
            </tr>
            <tr>
                <td class="headerText">Số thứ nhất</td>
                <td><input type="text" name="firstNumber" value="<?php if(isset($_POST['firstNumber'])) echo $_POST['firstNumber'] ?>"></td>
            </tr>
            <tr>
                <td class="headerText">Số thứ hai</td>
                <td><input type="text" name="secondNumber" value="<?php if(isset($_POST['secondNumber'])) echo $_POST['secondNumber'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><button name="submit">Tính</button></td>
            </tr>
        </table>
    </form>
</body>

</html>