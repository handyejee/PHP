<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://www.wala.com");

    //결과에 헤더값을 포함(TRUE, FALSE)
    curl_setopt($ch, CURLOPT_HEADER, false);