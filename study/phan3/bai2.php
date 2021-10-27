<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
</head>

<body>

    <table align="center" border="1">
        <th>Mã HS</th>
        <th>Tên hãng sữa</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <?php
        require("./configBai2.php");
        $conn = new mysqli($hostname, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed" . $con->connect_error);
        } else {
            // echo "Connect Successfully";
        $query = "SELECT * FROM hang_sua";
        $result = $conn->query($query);
        if(!$result) echo "Câu truy vấn bị sai";
        if($result -> num_rows !=0){
            while($row = $result->fetch_array()){
                echo "<tr>";
                echo "<td>".$row['Ma_hang_sua']."</td>";
                echo "<td>".$row['Ten_hang_sua']."</td>";
                echo "<td>".$row['Dia_chi']."</td>";
                echo "<td>".$row['Dien_thoai']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "</tr>";
            }
        }else echo "Bảng không có dữ liệu";}
        $conn->close();
        ?>
    </table>

</body>

</html>