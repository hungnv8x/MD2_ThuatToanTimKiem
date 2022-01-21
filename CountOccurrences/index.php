<?php
function countOccurrences($arr, $x)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $x) {
            $count++;
        }
    }
    return $count;
}
$arr = [1,3,3,4,5,6,7,3,7,9];
echo countOccurrences($arr,7);