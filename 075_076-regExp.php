<?php
    // 정규표현식 영문 대문자 검사
    $pattern = '/^[A-Z]+$/';
    $str = "CODING";

    if (preg_match($pattern, $str, $matches)) {
        echo "{$str}은 영문 대문자만 포함되어 있습니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "{$str}에는 영문 대문자 외의 문자열이 포함되어 있습니다.";
    }

    $pattern2 = '/^[a-z]+$/';
    $str = "apple";

    if (preg_match($pattern2, $str, $matches2)) {
        echo "{$str}은 영문 소문자만 포함되어 있습니다.";
        echo "<pre>";
        var_dump($matches2);
        echo "</pre>";
    } else {
        echo "{$str}에는 영문 소문자 외의 문자열이 포함되어 있습니다.";
    }
