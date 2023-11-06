<?php
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
echo '<h1>'. "Home" .'</h1>';
