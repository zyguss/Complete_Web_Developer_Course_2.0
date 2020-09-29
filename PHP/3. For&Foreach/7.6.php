<?php

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

foreach ($family as $key => $value) {
    
	// Svima u nizu daje prezime Percival
    $family[$key] = $value." Percival";
    
    echo "Array item ".$key." is ".$value."<br>";
}


for ($i = 0; $i < sizeof($family); $i++) {
    
    echo $family[$i]."<br>";
    
}


for ($i = 10; $i >= 0; $i--) {
    
    echo $i."<br>";
}

?>