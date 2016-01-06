<?php
    date_default_timezone_set('GMT');

    $months = array();

    for ($i = 1; $i < 13; $i++) {
        $date = date_create("2015-$i-01");
        $month = date_format($date, "F");
        array_push($months, $month);
    }
    
    sort($months, SORT_STRING);
    foreach ($months as $name) {
        echo "$name\n";
    }
?>