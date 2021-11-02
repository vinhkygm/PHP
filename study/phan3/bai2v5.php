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
        <div class="imgProduct"><img src=""></div>
        <div class="infoProduct"></div>
    </div>

    <?php
        require("./configBai2.php");
        $conn = new mysqli($hostname,$username,$password,$dbname);
        if($conn->connect_error) die("Connect Failed".$conn->connect_error);
        else{
            $query = "SELECT * FROM sua A, hang_sua B,loai_sua C WHERE A.Ma_hang_sua = B.Ma_hang_sua AND A.Ma_loai_sua = C.Ma_loai_sua";
            $result = $conn->query($query);
            if(!$result) echo "Câu truy vấn bị sai";
            else{
                if($result->num_rows != 0){
                    while($row = $result->fetch_array()){
                        switch($row['Ten_sua']){
                            case "Gain Advance": echo '<div class="imgProduct"><img src="img/gainadvance.jpg"></div>'; 
                            echo '<div class="infoProduct">
                            <div class="name">'.$row["Ten_sua"].'</div>
                            <div class="companyName">Nhà sản xuất: '.$row["Ten_hang_sua"].'</div>
                            <div class="subInfo">
                            <div class="companyName">'.$row["Ten_loai"].'</div>
                            <div class="weight">'.$row["Trong_luong"].'</div>
                            <div class="price">'.$row["Don_gia"].'</div>
                            
                            </div>
                            </div>';
                            break;
                        };
                        echo '';
                    }
                }
            }
        }
    ?>
</body>
</html>