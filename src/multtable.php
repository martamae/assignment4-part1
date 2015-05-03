
<?php
	echo '<!DOCTYPE html>
	<head>
	<meta charset="utf-8" />
	<title>Assignment 4</title>
	</head>
	<body>';

    //Get variable from URL
    $minMultiplicand = $_GET["min-multiplicand"];
    $maxMultiplicand = $_GET["max-multiplicand"];
    $minMultiplier = $_GET["min-multiplier"];
    $maxMultiplier = $_GET["max-multiplier"];

    //Check variables
    $printTable = True;

    if ($minMultiplier == NULL) {
        echo 'Missing parameter min-multiplier <br>';
        $printTable = False;
    }

    if ($minMultiplicand == NULL) {
        echo 'Missing parameter min-multiplicand <br>';
        $printTable = False;
    }

    if ($maxMultiplier == NULL) {
        echo 'Missing parameter max-multiplier <br>';
        $printTable = False;
    }

    if ($maxMultiplicand == NULL) {
        echo 'Missing parameter max-multiplicand <br>';
        $printTable = False;
    }

    if ($minMultiplicand != NULL && $maxMultiplicand != NULL && $minMultiplicand > $maxMultiplicand) {
        echo 'Minimum multiplicand larger than maximum <br>';
        $printTable = False;
    }

    if ($minMultiplier != NULL && $maxMultiplier != NULL && $minMultiplier > $maxMultiplier) {
        echo 'Minimum multiplier larger than maximum <br>';
        $printTable = False;
    }

    if (!ctype_digit($minMultiplier) || $minMultiplier < 0) {
        echo 'Minimum multiplier must be a valid integer <br>';
        $printTable = False;
    }

    if (!ctype_digit($maxMultiplier) || $maxMultiplier < 0) {
        echo 'Maximum multiplier must be a valid integer <br>';
        $printTable = False;
    }

    if (!ctype_digit($maxMultiplicand) || $maxMultiplicand < 0) {
         echo 'Maximum multiplicand must be a valid integer <br>';
        $printTable = False;
    }

    if (!ctype_digit($minMultiplicand) || $minMultiplicand < 0) {
        echo 'Minimum multiplicand must be a valid integer <br>';
        $printTable = False;
    }

    if ($printTable) {
        //Create table
        echo '<table>';

        echo '<tr> <td>';
        for ($j = $minMultiplier; $j <= $maxMultiplier; $j++) {
            echo '<td>';
            echo $j;
        }

        for ($i = $minMultiplicand; $i <= $maxMultiplicand; $i++) {
            echo '<tr> <td>';
            echo $i;

            for ($j = $minMultiplier; $j <= $maxMultiplier; $j++) {
                echo '<td>';
                echo $j * $i;
            }
        }

        echo '</table>';
    }

    echo '</body>';
?>