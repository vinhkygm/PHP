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
        $superhero = array(
           "Spider man" => array("name" => "Peter Parker", "email" => "peterparker@gmail.com"),
            "Super man" => array("name" =>"Clark Kent","email" => "clarkkent@gmail.com"),
            "Iron man" => array("name" => "Tony Stark", "email" => "tonystark@gmail.com")
        );
        
        foreach($superhero as $key => $value){
            echo $key."<ul>";
            foreach($value as $k => $v){
                echo "<li>".$v."</li>";
            }
            echo "</ul>";
        }
        
        $superhero1 = array(
            array("Peter Parker","peterparker@gmail.com"),
            array("Clark Kent", "clarkkent@gmail.com"),
            array("Tony Stark", "tonystark@gmail.com")
         );
        for($i = 0; $i < count($superhero1); $i++) {
            echo "<ul>";
            for($j=0; $j < count($superhero1[$i]); $j++){
                echo "<br>".$superhero1[$i][$j];
            }
            echo "</ul>";
        }
    ?>
</body>
</html>