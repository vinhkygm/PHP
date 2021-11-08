<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2.6</title>
    <link rel="stylesheet" href="css/bai2v6.css">
</head>

<body>
    <div class="header">THÔNG TIN CÁC SẢN PHẨM</div>
    <div class="product">
        <table border="1">
            <?php
            function printInfo($row, $hinh, $count)
            {
                if ($count < 5) {
                    echo '<td class="product"><div class="name">' . $row["Ten_sua"] . '</div>
                    <div class="subInfo">' . $row["Trong_luong"] . ' gr - ' . $row["Don_gia"] . ' VND</div>
                    <img src="img/Hinh_sua/' . $hinh . '"></td>';
                    $count++;
                    return $count;
                } else {
                    echo '<td class="product"><div class="name">' . $row["Ten_sua"] . '</div>
                    <div class="subInfo">' . $row["Trong_luong"] . ' gr - ' . $row["Don_gia"] . ' VND</div>
                    <img src="img/Hinh_sua/' . $hinh . '"></td>';
                    echo '</tr>';
                    echo '<tr>';
                    $count = 1;
                    return $count;
                }
            }
            require("./configBai2.php");
            $conn = new mysqli($hostname, $username, $password, $dbname);
            if ($conn->connect_error) die("Connect Failed" . $conn->connect_error);
            else {
                $query = "SELECT * FROM sua A, hang_sua B,loai_sua C WHERE A.Ma_hang_sua = B.Ma_hang_sua AND A.Ma_loai_sua = C.Ma_loai_sua";
                $result = $conn->query($query);
                if (!$result) echo "Câu truy vấn bị sai";
                else {
                    $count = 1;
                    echo '<tr>';
                    if ($result->num_rows != 0) {
                        while ($row = $result->fetch_array()) {
                            switch ($row['Ten_sua']) {
                                case "Gain Advance":
                                    $count = printInfo($row, "s_abbott_gainadvance_bot_400.jpg", $count);
                                    break;
                                case "Gain IQ":
                                    $count = printInfo($row, "s_abbott_ganiq.jpg", $count);
                                    break;
                                case "Abbott Grow":
                                    $count = printInfo($row, "s_abbott_grow_400.jpg", $count);
                                    break;
                                case "Abbott Grow School":
                                    $count = printInfo($row, "s_abbott_school_bot_400.jpg", $count);
                                    break;
                                case "Abbott Pedia Sure":
                                    $count = printInfo($row, "s_abbott_PediaSure_bot_400.jpg", $count);
                                    break;
                                case "Similac Neo Sure":
                                    $count = printInfo($row, "s_abbott_similac_400.jpg", $count);
                                    break;
                                case "Sữa bột nguyên kem Cô Gái Hà Lan":
                                    $count = printInfo($row, "s_dutchlady_bot_giay_400.jpg", $count);
                                    break;
                                case "Canximex":
                                    $count = printInfo($row, "s_dutchlady_canximex_900.jpg", $count);
                                    break;
                                case "Friso":
                                    $count = printInfo($row, "s_dutchlady_bot_giay_456_400.jpg", $count);
                                    break;
                                case "Cô Gái Hà Lan 123":
                                    $count = printInfo($row, "s_dutchlady_123_bot.jpg", $count);
                                    break;
                                case "Cô Gái Hà Lan 456":
                                    $count = printInfo($row, "s_dutchlady_bot_giay_456_400.jpg", $count);
                                    break;
                                case "Sữa đặc Trường Sinh":
                                    $count = printInfo($row, "s_dutchlady_dac_truong_sinh.jpg", $count);
                                    break;
                                case "Sữa đặc Hoàn Hảo":
                                    $count = printInfo($row, "s_dutchlady_dac_hoan_hao.jpg", $count);
                                    break;
                                case "Sữa chua Cô Gái Hà Lan":
                                    $count = printInfo($row, "s_dutchlady_chua.jpg", $count);
                                    break;
                                case "Sữa tươi tiệt trùng Cô Gái Hà Lan":
                                    $count = printInfo($row, "s_dutchlady_tuoi.jpg", $count);
                                    break;
                                case "Sữa chua uống Cô Gái Hà Lan":
                                    $count = printInfo($row, "s_dutchlady_chua_uong.jpg", $count);
                                    break;
                                case "Fristi":
                                    $count = printInfo($row, "s_dutchlady_fristi.jpg", $count);
                                    break;
                                case "Daisy Không Đường":
                                    $count = printInfo($row, "s_daisy_900.jpg", $count);
                                    break;
                                case "Daisy Vani":
                                    $count = printInfo($row, "s_daisy_bot_400.jpg", $count);
                                    break;
                                case "Enfa Mama A+":
                                    $count = printInfo($row, "s_meadJohnson_mama.jpg", $count);
                                    break;
                                case "EnfaLac":
                                    $count = printInfo($row, "s_meadJohnson_enfalac.jpg", $count);
                                    break;
                                case "EnfaGrow":
                                    $count = printInfo($row, "s_meadJohnson_enfagrow.jpg", $count);
                                    break;
                                case "EnfaPro":
                                    $count = printInfo($row, "s_meadJohnson_enfapro.jpg", $count);
                                    break;
                                case "EnfaPro A+":
                                    $count = printInfo($row, "s_meadJohnson_enfaproA.jpg", $count);
                                    break;
                                case "Nuti Mum":
                                    $count = printInfo($row, "s_nutifood_mum.jpg", $count);
                                    break;
                            };
                            echo '';
                        }
                    }
                }
            }
            ?>
        </table>
    </div>
</body>

</html>