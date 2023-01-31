<?php

$busList1[0] = 4319;
$busList1[1] = 461;
$busList1[2] = 350;
$busList1[3] = 641;

$busList2[0] = 123;
$busList2[1] = 456;
$busList2[2] = 789;
$busList2[3] = 012;

$busList3[0] = 1212;
$busList3[1] = 3434;
$busList3[2] = 5656;
$busList3[3] = 7878;

// 배열 모음을 배열 안에 넣어 2차원 배열 생성
$busListArr = array($busList1, $busList2, $busList3);

echo "<pre>";
print_r($busListArr);
echo "</pre>";

/* 반복문으로 원하는 값 추출
i = 1번 배열 돌면서 
j = 2번 배열의 0-2 값 가져오기 */
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $busListArr[$i][$j]."<br>";
    }
    echo "<br>";
    // $i 안에 j 배열이 끝날때 마다 줄 띄우기
}



