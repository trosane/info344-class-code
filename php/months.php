<?php
    $months = array("J", "F", "M", "A", "May", "J", "July", "Aug", "S", "O", "N", "D");
    
    sort($months, SORT_STRING);
    foreach ($months as $name) {
        echo "$name\n";
    }
?>