<?php
    $testArr = array("A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10");

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