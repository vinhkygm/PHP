<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: red;
            font-family: 'Tahoma';
        }
    </style>
</head>
<body>
    <?php if($_POST['username'] == "admin" && $_POST['password'] == '123' && $_POST['password'] == $_POST['repassword']){
        echo '<p>welcome, admin</p>';
    }else echo 'Username hoặc Password bị sai. Vui lòng nhập lại';?><br>
</body>
</html>