<?php
function isAsc($a){
    $check = 0;
    $mess= "YES";
    for($i=1;$i<count($a);$i++){
        if($a[$i-1]>$a[$i]){
            $mess= "NO";
        }
        if($a[$i-1]==$a[$i]){
            $check++;
        }
    }
    if($check==count($a)){
        return "NO";
    }
    return $mess;
}
$a= explode(' ',"1 2 3 4 6",5);
$result = isAsc($a);
echo $result;
echo "Đã thay đổi ở ex1";
?>
