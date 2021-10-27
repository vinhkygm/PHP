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
        if(isset($_POST['submit'])){
            $string = $_POST['array'];
            $array = explode(",",$string);
            function increase($array){
                for($i = 0;$i<count($array)-1;$i++){
                    for($j = $i+1;$j<count($array);$j++){
                        if($array[$i]>$array[$j]){
                            $tam = $array[$i];
                            $array[$i] = $array[$j];
                            $array[$j] = $tam;
                        }
                    }
                }
                return $array;
            }
            function decrease($array){
                for($i = 0;$i<count($array)-1;$i++){
                    for($j = $i+1;$j<count($array);$j++){
                        if($array[$i]<$array[$j]){
                            $tam = $array[$i];
                            $array[$i] = $array[$j];
                            $array[$j] = $tam;
                        }
                    }
                }
                return $array;
            }
            $increase = implode(",",increase($array));
            $decrease = implode(",",decrease($array));
        }else{
            $string = "";
            $increase = "";
            $decrease = "";
        }
    ?>
    <form action="bai6.php" method="post">
        <div class="header">Sắp xếp mảng</div>
        <table>
            <tr class="trow">
                <td >Nhập mảng:</td>
                <td><input type="text" name="array" value="<?php echo $string ?>"><span>(*)</span></td>
            </tr>
            <tr class="trow">
                <td ></td>
                <td><input type="submit" name="submit" value="Sắp xếp tăng/giảm"></td>
            </tr>
            <tr>
                <td class="text">Sau khi sắp xếp</td>
                <td></td>
            </tr>
            <tr>
                <td>Tăng dần</td>
                <td><input type="text" value="<?php echo $increase ?>"></td>
            </tr>
            <tr>
                <td>Giảm dần</td>
                <td><input type="text" value="<?php echo $decrease ?>"></td>
            </tr>
        </table>
        <div class="footer"><span>(*)</span>Các số được nhập cách nhau bằng dấu ","</div>
    </form>
</body>
</html>