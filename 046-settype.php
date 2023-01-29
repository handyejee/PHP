<?php
$val = "true";
echo "변수 val의 데이터형".gettype($val);

echo "<br>";
settype($val, 'bool');
echo "변수 val의 데이터형".gettype($val);
echo "<br>";
var_dump($val); // 배열의 구조와 값을 확인 가능