<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){    
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $note = $_POST['note'];
        echo "Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập <br>";
        echo "Họ tên: " . $fullname . "<br>";
        echo "Address: " . $address. "<br>";
        echo "Phone: " . $phone . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Country: " . $country . "<br>";
        echo "Note: " . $note . "<br>";
    }
?>

</body>
</html>