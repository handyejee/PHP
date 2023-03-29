<?php
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, "http://www.naver.com");
    $result = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);