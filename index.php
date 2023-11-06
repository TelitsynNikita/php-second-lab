<?php

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td
$price = array(
    0 => 'index.php',
    1 => 'home.php',
    2 => 'about.php',
    3 => 'contact.php'
);

echo '<ul style="display: flex; gap: 10px; align-items: center; list-style: none">';

for ($i = 0; $i < count($price); $i++) {
    echo '<li>';

        echo '<a href="'.$price[$i].'">'. $price[$i] .'</a>';

    echo '</li>';
}

echo '</ul>';

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    if ($tr === 1) {
        echo '<tr style="font-weight: bold; background-color: dodgerblue">';
    } else {
        echo '<tr>';
    }
    for ($td=1; $td<=$cols; $td++){
        if ($td === 1) {
            echo '<td style="font-weight: bold; background-color: dodgerblue">'. $tr*$td .'</td>';
        } else {
            echo '<td>'. $tr*$td .'</td>';
        }
    }
    echo '</tr>';
}

echo '</table>';

