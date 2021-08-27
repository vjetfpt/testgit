<?php
    /* explode() chuỗi->mảng*/
    $chuoi="bui hoang viet";
    $newArr=explode(' ',$chuoi,3);
    var_dump($newArr);
    /*implode mảng->chuyển*/
    $chuoi2=implode(' ',$newArr);
    var_dump($chuoi2);
    echo "<br/>";
    /*Đếm số lượng ký tự trong chuỗi*/
    $soKyTu= strlen($chuoi2);
    echo "Số ký tự trong chuỗi: $soKyTu <br/>";
    /*Đếm số từ trong chuỗi*/
    $soTu = str_word_count($chuoi2);
    echo "Số từ trong chuỗi: $soTu";
    /*str_replace(chuoi_can_tim,chuoi_thay_the,chuoi)*/
    $str='Xin chao cac ban nhe';
    $str=str_replace('ban','every one',$str);
    echo "<br/> $str";    
    /*cắt chuỗi substr(chuoi,vị trí bắt đầu, vị trí kết thúc)*/
    $str = substr($str,4,10);
    echo "<br/> chuỗi vừa cắt: $str <br/>";
    /*strstr($chuoi,ký tự muốn chọn) cắt chuỗi từ ký tự được chọn-> hết chuỗi đó*/
    echo strstr('hoang viet',' ')."<br/>";
    /*đếm vị trí của ký tự strpos*/
    echo strpos('bui hoang viet',' ')."<br/>";
    /*xóa các ký tự ở đầu và cuối chuỗi*/
    echo trim('bui hoang viet','hoang');
?>