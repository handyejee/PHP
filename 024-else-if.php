<?php
    $gender = 'girl';
    $likePlace = "Universal Studios";

    if ($gender == 'girl' && $likePlace == 'disneyland') {
        echo "소녀는 디즈니랜드에 가는 것을 좋아합니다.";
    } elseif ($gender == 'girl' && $likePlace == 'Universal Studios') {
        echo "소녀는 유니버셜 스튜디오에 가는 것을 좋아합니다.";
    } else {
        echo "소녀는 무엇도 좋아하지 않습니다";
    }