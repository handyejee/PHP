<?php
    $fopen = fopen('helloworld.txt', 'r+');
    
    if ($fopen) {
        echo "������ �������ϴ�.";
    } else {
        echo "������ ���µ� �����߽��ϴ�.";
    }