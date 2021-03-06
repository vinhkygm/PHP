<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2.5</title>
    <link rel="stylesheet" href="css/bai2v5.css">
</head>

<body>
    <div class="header">THÔNG TIN SẢN PHẨM</div>
    <div class="product">
        <table border="1">
            <?php
            function printInfo($row, $hinh)
            {
                echo '<div class="oneProduct">';
                echo '<tr>';
                echo '<td class="imgProduct"><img src="img/Hinh_sua/' . $hinh . '"></td>';
                echo '<td class="infoProduct">
                            <div class="name">' . $row["Ten_sua"] . '</div>
                            <div class="companyName">Nhà sản xuất: ' . $row["Ten_hang_sua"] . '</div>
                            <div class="subInfo">
                            <div class="companyName">' . $row["Ten_loai"] . '</div>
                            <div class="weight">' . $row["Trong_luong"] . '</div>
                            <div class="price">' . $row["Don_gia"] . '</div>
                            </div>
                            </td>';
                echo '</tr>';
                echo '</div>';
            }
            require("./configBai2.php");
            $conn = new mysqli($hostname, $username, $password, $dbname);
            if ($conn->connect_error) die("Connect Failed" . $conn->connect_error);
            else {
                $query = "SELECT * FROM sua A, hang_sua B,loai_sua C WHERE A.Ma_hang_sua = B.Ma_hang_sua AND A.Ma_loai_sua = C.Ma_loai_sua";
                $result = $conn->query($query);
                if (!$result) echo "Câu truy vấn bị sai";
                else {
                    if ($result->num_rows != 0) {
                        while ($row = $result->fetch_array()) {
                            switch ($row['Ten_sua']) {
                                case "Gain Advance":
                                    printInfo($row, "s_abbott_gainadvance_bot_400.jpg");
                                    break;
                                case "Gain IQ":
                                    printInfo($row, "s_abbott_ganiq.jpg");
                                    break;
                                case "Abbott Grow":
                                    printInfo($row, "s_abbott_grow_400.jpg");
                                    break;
                                case "Abbott Grow School":
                                    printInfo($row, "s_abbott_school_bot_400.jpg");
                                    break;
                                case "Abbott Pedia Sure":
                                    printInfo($row, "s_abbott_PediaSure_bot_400.jpg");
                                    break;
                                case "Similac Neo Sure":
                                    printInfo($row, "s_abbott_similac_400.jpg");
                                    break;
                                case "Sữa bột nguyên kem Cô Gái Hà Lan":
                                    printInfo($row, "s_dutchlady_bot_giay_400.jpg");
                                    break;
                                case "Canximex":
                                    printInfo($row, "s_dutchlady_canximex_900.jpg");
                                    break;
                                case "Friso":
                                    printInfo($row, "s_dutchlady_bot_giay_456_400.jpg");
                                    break;
                                case "Cô Gái Hà Lan 123":
                                    printInfo($row, "s_dutchlady_123_bot.jpg");
                                    break;
                                case "Cô Gái Hà Lan 456":
                                    printInfo($row, "s_dutchlady_bot_giay_456_400.jpg");
                                    break;
                                case "Sữa đặc Trường Sinh":
                                    printInfo($row, "s_dutchlady_dac_truong_sinh.jpg");
                                    break;
                                case "Sữa đặc Hoàn Hảo":
                                    printInfo($row, "s_dutchlady_dac_hoan_hao.jpg");
                                    break;
                                case "Sữa chua Cô Gái Hà Lan":
                                    printInfo($row, "s_dutchlady_chua.jpg");
                                    break;
                                case "Sữa tươi tiệt trùng Cô Gái Hà Lan":
                                    printInfo($row, "s_dutchlady_tuoi.jpg");
                                    break;
                                case "Sữa chua uống Cô Gái Hà Lan":
                                    printInfo($row, "s_dutchlady_chua_uong.jpg");
                                    break;
                                case "Fristi":
                                    printInfo($row, "s_dutchlady_fristi.jpg");
                                    break;
                                case "Daisy Không Đường":
                                    printInfo($row, "s_daisy_900.jpg");
                                    break;
                                case "Daisy Vani":
                                    printInfo($row, "s_daisy_bot_400.jpg");
                                    break;
                                case "Enfa Mama A+":
                                    printInfo($row, "s_meadJohnson_mama.jpg");
                                    break;
                                case "EnfaLac":
                                    printInfo($row, "s_meadJohnson_enfalac.jpg");
                                    break;
                                case "EnfaGrow":
                                    printInfo($row, "s_meadJohnson_enfagrow.jpg");
                                    break;
                                case "EnfaPro":
                                    printInfo($row, "s_meadJohnson_enfapro.jpg");
                                    break;
                                case "EnfaPro A+":
                                    printInfo($row, "s_meadJohnson_enfaproA.jpg");
                                    break;
                                case "Nuti Mum":
                                    printInfo($row, "s_nutifood_mum.jpg");
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