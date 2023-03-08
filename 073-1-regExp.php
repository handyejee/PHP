<?php
    // 패턴 대입
    $pattern = '/^i$/';
    $str = 'i';

    if (preg_match($pattern, $str, $matches)) {
        echo "값 {$str}은 정규식 표현에 적합한 값입니다. ";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "else 문";
    }