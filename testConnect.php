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
        $username = "root";
        $servername = "localhost";
        $password = "";
        $dbname = "testdatabase1";
        //Cach 1 Huong doi tuong
        $con = new mysqli($servername, $username,$password,$dbname);
        if($con -> connect_error){
            die ("Connection Failed: " . $con->connect_error);
        }
        else echo "Connect Successfully";
        
        // //Cach 2 Thu tuc ham
        // $con = mysqli_connect($servername, $username,$password,$dbname);
        // if(mysqli_connect_error()){
        //     die ("Connection Failed: " . mysqli_connect_error());
        // }
        // else echo "Connect Successfully";
    ?>
</body>
</html>