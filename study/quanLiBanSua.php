<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoa don ban sua</title>
</head>
<body>
    <table style="border: solid 2px black"; align="center" border=1>
        <tr>
            <th>So hoa don</th>
            <th>Ma sua</th>
            <th>So luong</th>
            <th>Don gia</th>
        </tr>
    
    <?php 
        require("./configQLBS.php");
        $con = new mysqli($hostname,$username,$password,$dbname);
        if($con -> connect_error){
        die ("Connection Failed: " . $con->connect_error);
        }
        else echo "Connect Successfully";
        
        //2. xây dựng câu truy vấn
        $query = 'select * from ct_hoadon where Don_gia >= 50000 and Ma_sua like "VN%"';
        //3. Thực thi câu truy vấn
        $result = $con->query($query);
        if(!$result) echo "Câu truy vấn bị sai!";
        //4. Xử lí kết quả trả về
        if($result->num_rows != 0){
            $count = true;
            while($row=$result->fetch_array()){
               if($count == true){
                echo "<tr style='background-color: #ccc'>";
                echo "<td>".$row['So_hoa_don']."</td>";
                echo "<td>".$row['Ma_sua']."</td>";
                echo "<td>".$row['So_luong']."</td>";
                echo "<td>".$row['Don_gia']."</td>";
                echo "</tr>";
                $count = false;
               }else{
                echo "<tr'>";
                echo "<td>".$row['So_hoa_don']."</td>";
                echo "<td>".$row['Ma_sua']."</td>";
                echo "<td>".$row['So_luong']."</td>";
                echo "<td>".$row['Don_gia']."</td>";
                echo "</tr>";
                $count = true;
               }
            }
        }else echo "Bảng không có dữ liệu";
        //5. Dọn dẹp bộ nhớ, đóng kết nối
        $con->close();
    ?>
    </table>
</body>
</html>