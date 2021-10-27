<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
</head>
<body>
    <?php
        $username = 'root';
        $hostname = 'localhost';
        $password  = '';
        $dbname = 'chuyenbay';
        $conn = new mysqli($hostname, $username, $password, $dbname);
        if ($conn->connect_error) die("Connection Failed" . $conn->connect_error);
        else {
            echo "Connect Successfully";
            $query = "SELECT * FROM khach_hang";
            $result = $conn->query($query);
            if (!$result) echo "Câu truy vấn bị sai";}
    ?>
</body>
</html>