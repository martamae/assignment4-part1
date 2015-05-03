
<?php
	echo '<!DOCTYPE html>
	<head>
	<meta charset="utf-8" />
	<title>Assignment 4</title>
	</head>
	<body>';

    $minMultiplicand = $_GET["min-multiplicand"];
    $maxMultiplicand = $_GET["max-multiplicand"];
    $minMultiplier = $_GET["min-multiplier"];
    $maxMultiplier = $_GET["max-multiplier"];

    echo '<table>';
    echo '<tr> <td>';
    for ($j = $minMultiplier; $j <= $maxMultiplier; $j++) {
         echo '<td>';
         echo $j;
    }
    for ($i = $minMultiplicand; $i <= $maxMultiplicand; $i++){
        echo '<tr> <td>';
        echo $i;
        for ($j = $minMultiplier; $j <= $maxMultiplier; $j++) {
            echo '<td>';
            echo $j * $i;
        }
    }
    echo '</table>';
?>