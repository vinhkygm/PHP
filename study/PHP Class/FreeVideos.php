<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Videos</title>
    <link rel="stylesheet" href="css/FreeVideos.css">
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
    function videoTemplate($link, $name, $teacher,$thumbnails)
    {
        echo '
        <div class="videos">
        <a href="'.$link.'">
            <div class="content">
                <div class="image"><img src="'.$thumbnails.'" alt=""></div>
                <div class="text">
                    <div class="header">'.$name.'</div>
                    <div class="teacher">Teacher: '.$teacher.'</div>
                </div>
                <div class="button">Watch Video</div>
            </div>
        </a>
        </div>
        ';
    }
    require("configPage.php");
    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) die("Connect Failed" . $conn->connect_error);
    else {
        $query = "SELECT * FROM free_videos";
        $result = $conn->query($query);
        if (!$result) echo "Câu truy vấn sai";
        else {
            if ($result->num_rows != 0) {
                while ($row = $result->fetch_array()) {
                    videoTemplate($row['link'], $row['name'], $row['teacher'],$row['thumbnails']);
                }
            }
        }
    }

    ?>


</body>

</html>