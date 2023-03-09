<?php
    // 패턴 대입
    $pattern = '/^i+$/';
    $str = 'ii';

    if (preg_match($pattern, $str, $matches)) {
        echo "값 {$str}은 정규표현식에 적합한 값입니다.";
        echo  "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "이름에는 영문만 포함되어야 합니다.";
    }
