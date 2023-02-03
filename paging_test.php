<?php
    $testArr = array("딸기", "토마토", "오렌지", "사과", "레몬", "레드향", "배", "망고", "귤", "포도");

    $page = $_GET['fruit'] ? $_GET['fruit'] : 1;

    $pageSize = 3;

    //시작점 
    $startNum = ($page - 1) * $pageSize; // page - 1 : 배열의 시작인 0부터 시작하기 위해 
    $endNum = $startNum + $pageSize;

    $lastPage = ceil(count($testArr) / $pageSize);


    for ($i = $startNum; $i < $endNum; $i++) {
        echo $testArr[$i]."<br>";
    }
    
    for ($i = 0; $i < $lastPage; $i++) {
        echo "<a href='?page=".($i + 1)."'>".($i + 1)."</a> ";
    }