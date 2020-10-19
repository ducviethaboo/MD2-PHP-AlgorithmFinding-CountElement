<?php
function countElement($arr,$num) {
    $count = 0;
    foreach ($arr as $value) {
        if($value == $num) {
            $count++;
        }
    }
    return $count;
}
$array = [1,3,4,5,6,1,223,4,3,1,4,5];
echo countElement($array,1);