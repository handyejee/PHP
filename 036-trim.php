<?php

    $str = " 양쪽 모두 공백 없앰 ";
    echo '|'.trim($str).'l'; //|는 공백 확인을 위해 사용
    echo "<br>";

    $str = " 앞만 공백 없앰 ";
    echo '|'.ltrim($str).'l';
    echo "<br>";

    $str = " 뒤만 공백 없앰 ";
    echo '|'.rtrim($str).'l';
    echo "<br>";
