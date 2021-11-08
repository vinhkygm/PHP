<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="css/Courses.css">
</head>

<body>
    <form action="" method="post">
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
                            <a href="#">Courses</a>

                        </div>
                    </div>
                    <div class="btnSection">
                        <a href="#" class="login">Login</a>
                        <a href="#" class="register">Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentSection">
            <?php
            function cardTemplate($name, $content, $hinh,$id)
            {
                echo '
            <div class="card">
            <div class="image"><img src="./assets/image/' . $hinh . '" alt=""></div>
            <div class="header">' . $name . '</div>
            <div class="content">' . $content . '</div>
            <a href="http://localhost/study/PHP Class/RegisterForm.php?id='.$id.'&name='.$name.'" class="button" name="register">Đăng kí</a>
            </div>
            ';
            }
            require("configPage.php");
            $conn = new mysqli($hostname, $username, $password, $dbname);
            if ($conn->connect_error) die("Connect Failed" . $conn->connect_error);
            else {
                $query = "SELECT * FROM courses";
                $result = $conn->query($query);
                if (!$result) echo "Câu truy vấn sai";
                else {
                    if ($result->num_rows != 0) {
                        while ($row = $result->fetch_array()) {
                            cardTemplate($row['name'], $row['content'], $row['hinh'],$row['id']);
                        }
                    }
                }
            }
            $conn->close();
            ?>
        </div>
    </form>
</body>

</html>