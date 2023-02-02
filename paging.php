<?php
$sytest = array("a1","b2","c3","d4","e5","f6","g7","h8","i9","j10");

$page = $_GET['page'] ? $_GET['page'] : 1;
$pageSize = 3; // 한 페이지에 노출할 개수
$startNum = (($page-1) * $pageSize) + 1; // 시작점 1->1, 2->4, 3->7, 4->10
$endNum = $startNum + $pageSize - 1; // 마지막점
$lastPage = ceil((count($sytest)) / $pageSize); // 마지막 페이징 번호

echo "\$startNum : ".$startNum."<br>";
echo "\$endNum : ".$endNum."<br>";
echo "\$lastPage : ".$lastPage."<br><br>";


for ($i = $startNum - 1; $i < $endNum; $i++) {
	echo $sytest[$i]."<br>";
}

echo "--------------<br>";
for ($i = 0; $i < $lastPage; $i++) {
	echo "<a href='?page=".($i + 1)."'>".($i + 1)."</a> ";
}

exit;