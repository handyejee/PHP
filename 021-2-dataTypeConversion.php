<?php
    $str = "123문자열";
    echo "데이터형 변경 전의 데이터형 ".gettype($str)."<br>";

    $str = (int)$str;
    echo "데이터형 변경 후의 데이터형 ".gettype($str)."값은 {$str}"."<br>";

    $str1 = "문자열123";
    echo "데이터형 변경 전의 데이터형 ".gettype($str1)."<br>";

    $str1 = (int)$str1;
    echo "데이터형 변경 후의 데이터형 ".gettype($str1)."값은 {$str1}";
    // 문자열 뒤에 숫자가 위치하면 int로 변환해도 대입되는 값은 0이다.
?>