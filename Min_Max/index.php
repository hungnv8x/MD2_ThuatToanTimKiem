<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr){
    $max = arr[0];
    for ($i = 0; $i <count($arr) ;$i++){
        if ($max < $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}
$arr =[5,3,2,7,9,11,4,6];
echo implode(" ",$arr);
echo "<br>";
echo "Min = ".findMin($arr);
echo "<br>";
echo "Max = ".findMax($arr);