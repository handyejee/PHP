<?php
    $num = 123456789;
    echo number_format($num); echo "<br>";

    // number_format() 함수의 자릿수를 지정한 예
    $num2 = 123456789.794;
    echo number_format($num2, 2); // 123456789.794 값을 첫번째 값으로 전달하고 두번째 값으로 2(소숫점 둘째자리까지 표시)를 전달
