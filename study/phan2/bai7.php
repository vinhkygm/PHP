<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 7</title>
    <link rel="stylesheet" href="css/bai7.css">
</head>

<body>
    <?php
    $mang_can = array("Quý", "Giáp", "Ất", "Bình", "Đinh", "Dậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $mang_hinh = array("hoi.png", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ty2.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
    if (isset($_POST['submit']) && $_POST['nam'] != "") {
        $namdisplay = $_POST['nam'];
        $nam = $_POST['nam'];
        $nam -= 3;
        $can = $nam % 10;
        $chi = $nam % 12;
        $nam_al = $mang_can[$can];
        $nam_al = $nam_al . " " . $mang_chi[$chi];
        $hinh = $mang_hinh[$chi];
        $hinh_anh = "img/$hinh";
    } else {
        $namdisplay = "";
        $nam = "";
        $nam_al = "";
    }
    ?>
    <form action="bai7.php" method="POST">
        <div class="header">Tính năm âm lịch</div>
        <table>
            <tr>
                <td>Năm dương lịch</td>
                <td></td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td><input type="text" name="nam" value="<?php echo $namdisplay ?>"></td>
                <td><input type="submit" value="=>" class="submit" name="submit"></td>
                <td><input type="text" readonly class="result" value="<?php echo $nam_al ?>"></td>
            </tr>
        </table>
        <div class="img"><img src="<?php echo $hinh_anh ?>" alt="" width="150px"></div>
    </form>
</body>

</html>