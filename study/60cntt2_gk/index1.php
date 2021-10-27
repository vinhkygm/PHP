<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <link rel="stylesheet" href="bai1.css">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['n'] <= 2 || $_POST['n'] > 20) {
            echo '<script language="javascript">';
            echo 'alert("Nhập lại")';
            echo '</script>';
            $report = "";
        } else {
            $n = $_POST['n'];
            $report = $n;
            $smaller20 = array();
            for ($i = 0, $j = 0; $i < $n; $i++) {
                $array[$i] = rand(-100, 100);
                $result[$i] =  $array[$i];
                if ($result[$i] < 20 && $result[$i] > 0) {
                    $check = false;
                    for($a = 2; $a<$result[$i]-1;$a++){
                        if($result[$i] % $a == 0){
                            $check = true;
                        }
                    }
                    if($check == false){
                        $smaller20[$j] = $result[$i];
                        $j++;
                    }
                }
            }
        }
    } else $report = "";

    ?>
    <form action="" method="post">
        <div class="header">Bài 1</div>
        <table>
            <tr>
                <td>Nhập số nguyên chẵn n</td>
                <td><input type="text" name="n" value="<?php echo $report ?>"></td>
            </tr>
            <tr>
                <td>Mảng ngẫu nhiên n</td>
                <td>
                    <input type="text" value="<?php if (isset($_POST['submit'])) {
                                                    for ($i = 0; $i < $n; $i++) {
                                                        if ($i > 0) echo " ," . $result[$i];
                                                        else echo $result[$i];
                                                    }
                                                } else echo "" ?>">
                </td>
            </tr>
            <tr>
                <td>Các số bé hơn 20 trong mảng</td>
                <td><textarea name="smaller20" id="" cols="30" rows="10"><?php if (isset($_POST['submit']) && count($smaller20)>0) {
                            for ($i = 0; $i < count($smaller20); $i++) {
                                if ($i > 0) echo " ," . $smaller20[$i];
                                else echo $smaller20[$i];
                            }
                    } else {
                       echo "Không tồn tại số nguyên tố thỏa điều kiện";
                    } ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Phát sinh và tính toán"></td>
            </tr>
        </table>
    </form>
</body>

</html>