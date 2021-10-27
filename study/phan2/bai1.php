<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $n = $_POST['n'];
            if(is_int($n+0) && $n >=0){
                $count = 0;
                $count100 = 0;
                $sumMinus = 0;
                for($i = 0, $j = 0; $i<$n;$i++){
                    $array[$i] = rand(-150,150);
                    $result[$i] =  $array[$i];
                    if($result[$i] %2 ==0) $count++;
                    if($result[$i] < 100) $count100++;
                    if($result[$i] < 0) $sumMinus += $result[$i];
                    if($result[$i] == 0) {$pos[$j] = $i; $j++;}
                }
               
            }

            
        }else $result = "";
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập vào số tự nhiên n</td>
                <td><input type="text" placeholder="Nhập một số tự nhiên n" name="n" value="<?php if(isset($_POST['submit'])) echo $_POST['n']?>"></td>
                <td><input type="submit" name="submit" value="Thực hiện"></td>
            </tr>
            <tr>
                <td>Mảng phần tử</td>
                <td>
                    <input type="text" value="<?php if(isset($_POST['submit'])&& is_int($_POST['n']+0)) {
                        for($i = 0; $i<$n;$i++){
                            if($i>0) echo " ,".$result[$i];
                            else echo $result[$i];
                        }
                    } else echo "" ?>">
                </td>
            </tr>
            <tr>
                <td>Số lượng số chẵn trong mảng là:</td>
                <td><input type="text" value="<?php if(isset($_POST['submit'])) echo $count; else echo ""?>" readonly></td>
            </tr>
            <tr>
                <td>Số lượng số nhỏ hơn 100 là:</td>
                <td><input type="text" value="<?php if(isset($_POST['submit'])) echo $count100; else echo ""?>" readonly></td>
            </tr>
            <tr>
                <td>Tổng số âm trong mảng là:</td>
                <td><input type="text" value="<?php if(isset($_POST['submit'])) echo $sumMinus; else echo ""?>" readonly></td>
            </tr>
            <tr>
                <td>Các vị trí phần tử bằng 0 là:</td>
                <td>
                    <input type="text" value="<?php if(isset($_POST['submit'])&& is_int($_POST['n']+0)) {
                        for($i = 0; $i<$j;$i++){
                            if($i>0) echo " ,".$pos[$i];
                            else echo $pos[$i];
                        }
                    } else echo "" ?>"readonly>
                </td>
            </tr> <tr>
                <td>Sắp xếp mảng:</td>
                <td>
                    <input type="text" value="<?php 
                    if(isset($_POST['submit'])) {
                        for($i = 0; $i<$n-1;$i++){
                            for($j = $i+1; $j<$n;$j++){
                                if($result[$i] > $result[$j]){
                                    $tam = $result[$i];
                                    $result[$i] = $result[$j];
                                    $result[$j] = $tam;
                                }
                            }
                        }
                        for($i = 0; $i<$n;$i++){
                            if($i>0) echo " ,".$result[$i];
                            else echo $result[$i];
                        }
                    } else echo "" ?>" readonly>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>