<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8"/>
    </head>
    <body>
        
        <?php
        
        function displaySymbol(){
            if(randomValue == 0) {
            echo "<img src='img/seven.png' width='70' alt='seven' title='seven'>";
        }else if(randomValue == 1) {
            echo "<img src='img/cherry.png' width='70' alt='cherry' title='cherry'>";
        } else {
            echo "<img src='img/orange.png' width='70' alt='orange' title='orange'>";
        }
        }
        
        $randomValue = rand(0, 3);
        echo $randomValue;
        
        
        
        for($i=0; $i<3; $i++) {
        function displaySymbol(){
        }
        
       //$symbol = "seven";
        echo "<img src='img/$symbol.png' width='70' alt='$symbol' title='$symbol'>";
        
        
        //$symbol = "cherry";
        echo "<img src='img/$symbol.png' width='70' alt='$symbol' title='$symbol'>";
        
        //$symbol = "orange";
        echo "<img src='img/$symbol.png' width='70' alt='$symbol' title='$symbol'>";
        
        switch ($randomValue) {
            case 0: 
            $symbol = "seven";
            break;
            case 1:
            $symbol = "cherry";
            break;
            case 2: 
            $symbol = "orange";
            break;
        }
        
        
        ?>


<!--
        <img src="img/lemon.png" width="70" alt="Lemon" title="Lemon">
        <img src="img/cherry.png" width="70" alt="Cherry" title="Cherry">
        <img src="img/orange.png" width="70" alt="Orange" title="Orange">
                        
                        -->

    </body>
</html>