<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="DangNhap2.php" method="post">
        Fullname <br><input type="text" name="fullname" placeholder='Fullname'><br>
        Username <br><input type="text" name="username"  placeholder='Username'><br>
        Email <br><input type="text" name="email"  placeholder='Email'><br>
        Password <br><input type="text" name="password" type="password" placeholder='Password'><br>
        Re-enter Password <br><input type="text" name="repassword" type="password" placeholder='Re-enter Password'><br>
        <input type="submit" value="Sign up">
        <?php 
            if($_POST['password'] != $_post['repassword']) echo 'Incorrect password';
            else 
                if($_POST['username'] = 'admin' && $_POST['password'] == '123') echo "Welcome, admin";
                else echo "Something went wrong";
        ?>
    </form>
</body>
</html>