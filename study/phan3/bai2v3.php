<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2.3</title>
    <link rel="stylesheet" href="css/bai2v3.css">
</head>
<body>
    <table border="1">
        <th>Mã KH</th>
        <th>Tên Khách Hàng</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <?php
            require("./configBai2.php");
            $conn = new mysqli($hostname,$username,$password,$dbname);
            if($conn->connect_error) die ("Connenction Error".$conn->connect_error);
            else{
                // echo "Connection Successfully";            
                $query = "SELECT * FROM khach_hang";
                $result = $conn->query($query);
                if(!$result) echo "Câu truy vấn bị sai";
                else{
                    if($result->num_rows != 0){
                        $switch = true;
                        while($row = $result->fetch_array()){
                            if($switch == true){
                                echo "<tr style='background-color: rgb(255, 220, 195)'>";
                                echo "<td>".$row['Ma_khach_hang']."</td>";
                                echo "<td>".$row['Ten_khach_hang']."</td>";
                                if($row['Phai'] == 1) echo "<td class='img'> <img src='img/nu.jpg' width='40'></td>";
                                else echo "<td class='img'> <img src='img/nam.jpg' width='40'></td>";
                                echo "<td>".$row['Dia_chi']."</td>";
                                echo "<td>".$row['Dien_thoai']."</td>";
                                echo "</tr>";
                                $switch = false;
                            }
                            else{
                                echo "<tr>";
                                echo "<td>".$row['Ma_khach_hang']."</td>";
                                echo "<td>".$row['Ten_khach_hang']."</td>";
                                if($row['Phai'] == 1) echo "<td class='img'> <img src='img/nu.jpg' width='40'></td>";
                                else echo "<td class='img'> <img src='img/nam.jpg' width='40'></td>";
                                echo "<td>".$row['Dia_chi']."</td>";
                                echo "<td>".$row['Dien_thoai']."</td>";
                                echo "</tr>";
                                $switch = true;
                            }
                        }
                    }else echo "Bảng không có dữ liệu";
                    $conn -> close();
                }
            }
        ?>
    </table>
</body>
</html>