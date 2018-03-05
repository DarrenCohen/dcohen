<?php
function getRandomColor() {
    echo "background-color: rgba(".rand(0, 255).", ".rand(0, 255).", ".rand(0, 255).", $alpha)";
}

?>

<!DOCTYPE html>
<html>
    <title> Random Color </title>
    
    <style>
    
        body {
            #<?php 
            #$red = rand(0, 255);
            #$green = rand(0, 255);
            #$blue = rand(0, 255);
            #$alpha = rand(1, 100) / 100;
            #echo "background-color: rgba($red, $green, ".rand(0, 255).", $alpha)";
            #?>
            background-color: <?php getRandomColor() ?>;
            
        }
        h1 {
            <?php
            $red = rand(0, 255);
            $green = rand(0, 255);
            #$blue = rand(0, 255);
            $alpha = rand(1, 100) / 100;
            echo "background-color: rgba($red, $green, ".rand(0, 255).", $alpha)";
            ?>
        }
        h2 {
            color: <?php getRandomColor() ?>;
            backgorund-color: <?= getRandomColor() ?>;
        }
    </style>
    
    <body>
        <h1>
            
             Welcome! </h1>
        <h2> Random Background Color! </h2>
    </body>
</html>

