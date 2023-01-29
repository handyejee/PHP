<?php

function sum($num1, $num2)
{
    return $num1 + $num2;

    // 아래 코드는 작동하지 않음
    echo '함수';
}

echo sum(5, 10);

$plus = settype(sum(5, 10), 'int');
//php 7이상은 void 함수는 사용할 수 없어 type 을 지정해줘야 한다.
echo '<br>';
echo $plus + 20;
