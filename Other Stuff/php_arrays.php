<?php

$cards = array("ace", "one", 2);
//print_r($cards); //for debugging purposes, shows all elements in array

//echo $cards[0];

$cards[] = "jack";

array_push($cards, "queen");

$cards[2] = "ten";

//print_r($cards);

//displayCard($cards[3]);

print_r($cards);
echo "<hr>";

$lastCard = array_pop($cards); // Retrieves and removes last item
displayCard($lastCard);

unset($cards[1]); // Removes an element from array
echo "<hr>";
print_r($cards);

$cards = array_values($cards); // Indexes array
print_r($cards);
echo "<hr>";

shuffle($cards);
print_r($cards);
echo "<hr>";

$randomIndex = rand(0, count($cards)-1); // Gets random card
displayCard($cards[$randomIndex]);
echo "<hr>";

$randomIndex = array_rand($cards); // Gets random card
displayCard($cards[$randomIndex]);
echo "<hr>";


function displayCard($card) {
    
    //global $cards; // Using variable that is outside of the function
    //echo "<img src='/dcohen/challenges/img/cards/clubs/$cards[2].png'/>";
    
    echo "<img src='/dcohen/challenges/img/cards/clubs/$card.png'/>";

}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>