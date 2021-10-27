<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
    <link rel="stylesheet" href="css/bai5.css">
</head>
<body>
    <?php if(isset($_POST['submit'])){
        $oldArray = $_POST['array'];
        $array = explode(",",$oldArray);
        $value = $_POST['value'];
        $newValue = $_POST['newValue'];
        function changeValue($array,$value,$newValue){
            for($i=0;$i<count($array);$i++){
                if($value == $array[$i]){
                    $array[$i] = $newValue;
                }
            }
            return $array;
        }
        $newArray = implode(",",changeValue($array,$value,$newValue));
    }else {
        $array = "";
        $oldArray = "";
        $value = "";
        $newValue = "";
        $newArray = "";
    } 
    ?>
    <form action="bai5.php" method="post">
        <div class="header">Thay thế</div>
        <table>
            <tr class="trow">
                <td>Nhập các phần tử:</td>
                <td><input type="text" name="array" value="<?php echo $oldArray ?>"></td>
            </tr>
            <tr class="trow">
                <td>Giá trị cần thay thế:</td>
                <td><input type="text" name="value" value="<?php echo $value ?>"></td>
            </tr>
            <tr class="trow">
                <td>Giá trị thay thế:</td>
                <td><input type="text" name="newValue" value="<?php echo $newValue ?>"></td>
            </tr>
            <tr class="trow">
                <td></td>
                <td><input type="submit" class="submit" name="Thay thế" ></td>
            </tr>
            <tr>
                <td>Mảng cũ:</td>
                <td><input type="text" class="input" readonly value="<?php echo $oldArray ?>"></td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế:</td>
                <td><input type="text" class="input" readonly value="<?php echo $newArray ?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>