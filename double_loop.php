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

// �迭 ������ �迭 �ȿ� �־� 2���� �迭 ����
$busListArr = array($busList1, $busList2, $busList3);

echo "<pre>";
print_r($busListArr);
echo "</pre>";

/* �ݺ������� ���ϴ� �� ����
i = 1�� �迭 ���鼭 
j = 2�� �迭�� 0-2 �� �������� */
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $busListArr[$i][$j]."<br>";
    }
    echo "<br>";
    // $i �ȿ� j �迭�� ������ ���� �� ����
}



