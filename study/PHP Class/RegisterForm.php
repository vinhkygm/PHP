<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/RegisterForm.css">

</head>

<body>

    <div class="introbackground">
        <div class="intro">
            <div class="header">
                <div class="navigationSection">
                    <div class="logoSection">
                        <img src="./assets/image/logo.png" alt="">
                        <div class="logoName">Epas</div>
                    </div>
                    <div class="navigator">
                        <a href="landingPage.html#home">Home</a>
                        <a href="landingPage.html#exercises">Exercises</a>
                        <a href="landingPage.html#personalInformation">Personal Information</a>
                        <a href="http://localhost/study/PHP Class/FreeVideos.php">Free Videos</a>
                        <a href="http://localhost/study/PHP Class/Courses.php">Courses</a>

                    </div>
                </div>
                <div class="btnSection">
                    <a href="#" class="login">Login</a>
                    <a href="#" class="register">Register</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    require("./configPage.php");
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $query = "INSERT INTO `register`(`name`, `phone`, `course`) VALUES ('$name','$phone','$id') ";
        if($result = $conn->query($query)){
            header('location:http://localhost/study/PHP Class/Courses.php');
        }
    }
    ?>
    <form action="" method="post">
        <div class="registerSection">
            <div class="title">Register Form</div>
            <div class="registerForm">
                <div class="form">
                    <div class="subject name">
                        <div class="header">Name</div>
                        <input type="text" name="name">
                    </div>
                    <div class="subject phone">
                        <div class="header">Phone Number</div>
                        <input type="text" name="phone">
                    </div>
                    <div class="subject course">
                        <div class="header">Course</div>
                        <input type="text" name="course" readonly value="<?= $name ?>">
                    </div>
                    <input type="submit" class="button" value="Register" name="submit">
                </div>
            </div>
        </div>
    </form>
</body>

</html>