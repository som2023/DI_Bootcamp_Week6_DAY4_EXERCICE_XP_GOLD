<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";


$temperatures = explode(", ", $month_temp);
sort($temperatures);
$average_temp = array_sum($temperatures) / count($temperatures);
echo "La température moyenne est de " . $average_temp . "°F. <br>" ;
echo "Les cinq températures les plus basses sont : " . implode(", ", array_slice($temperatures, 0, 5)) . "°F. <br>" ;
echo "Les cinq températures les plus élevées sont : " . implode(", ", array_slice($temperatures, -5)) . "°F." ;
?>
