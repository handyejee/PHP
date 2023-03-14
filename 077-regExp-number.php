<?php
    $pattern = '/^[0-9]+$/';
    $str = 123456;

    if (preg_match($pattern, $str, $matches)) {
        echo "값 {$str}은 정규식 표현에 적합한 값입니다.";
        echo "<br>";
        echo var_dump($matches);
    } else {
        "숫자외의 문자가 있는지 확인하세요!";
    }