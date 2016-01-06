<?php
    $json_file = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Seattle,us&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0");
    $jfo = json_decode($json_file);
    $weather = $jfo->weather[0]->main;
    $temp = $jfo->main->temp;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather</title>
</head>
<body>
    <h1>Weather: <?= $weather ?></h1>
    <h1>Temperature: <?= $temp ?></h1>
</body>
</html>