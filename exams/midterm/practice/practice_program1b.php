<?php
$letterArray = range("A","Z");

lettersDropdown(){
    global $letterArray;
    foreach($letterArray as $letter){
        echo "<option value='$letter'> $letter </option>";
    }
}

