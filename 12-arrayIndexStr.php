<?php
    // 배열 선언
    $earth = array();

    //earth의 nation 인덱스에 'korea' 대입
    $earth['nation'] = 'korea';

    //다수의 인덱스 넣기
    $earth = array('nation' => 'korea', 'nation2' => 'canada', 'nation3' => 'japan');

    //earth 배열의 nation 인덱스 출력
    echo "earth 배열의 nation 인덱스는 ". $earth['nation'], $earth['nation2'], $earth['nation3'];
?>