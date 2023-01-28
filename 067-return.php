<?php

function sum($num1, $num2) 
{
    $sum = $num1 + $num2;
    return $sum;

    // 아래 코드는 작동하지 않음 
    echo '함수';
}

echo sum(5, 10);

$plus = sum(5, 10);
echo '<br>';
echo $plus + 20;
?>
