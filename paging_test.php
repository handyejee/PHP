<?php
    $testArr = array("����", "�丶��", "������", "���", "����", "������", "��", "����", "��", "����");

    $page = $_GET['fruit'] ? $_GET['fruit'] : 1;

    $pageSize = 3;

    //������ 
    $startNum = ($page - 1) * $pageSize; // page - 1 : �迭�� ������ 0���� �����ϱ� ���� 
    $endNum = $startNum + $pageSize;

    $lastPage = ceil(count($testArr) / $pageSize);


    for ($i = $startNum; $i < $endNum; $i++) {
        echo $testArr[$i]."<br>";
    }
    
    for ($i = 0; $i < $lastPage; $i++) {
        echo "<a href='?page=".($i + 1)."'>".($i + 1)."</a> ";
    }