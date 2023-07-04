<?php
$price = 1.99;
$increase = 0;

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo ' packs cost $';
    echo $price * $i;
    echo "<br>";
    $increase++;
}
echo $increase;