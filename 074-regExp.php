<?php
    /* 한글 정규 표현식

    기본 패턴 : 
    $pattern = '/^[가-힣]$/';

    한글 검사할 byte 지정하는 법 : 
    $pattern = '/^[가-힣]{3}$/';

    */

    $pattern = '/^[가-힣]{3,}$/';
    $str = '코딩병아리';

    if (preg_match($pattern, $str, $matches)) {
        echo "값 {$str}는 정규식 표현에 적합한 값 입니다.";
        echo "<pre>";
        var_dump($matches);
        echo "</pre>";
    } else {
        echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인해주세요";
    }