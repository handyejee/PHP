<?
/******************************
     * 썸네일 이미지 저장
     ******************************/
    // $thumnail_images = $_FILES['thumbnail_images'];
    $thumbImgFile = $_FILES['thumbnail_images']; //파일 정보 가져오기
    $thumnail_images = 'C:\Program Files (x86)\ASP Korea\Asplink Client\www\imgtest\\'.$thumbImgFile['name']; //파일 저장할 경로 지정

    $result = move_uploaded_file($thumbImgFile['tmp_name'], $thumnail_images); //지정한 경로에 파일 저장
    // echo "DOCUMENT_ROOT는 :".$_SERVER['DOCUMENT_ROOT'];

    $productInfo['thumbnail_images'] = '@'.$thumnail_images; //지정한 경로에 있는 파일 전송
