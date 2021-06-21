<?php
$numbers = [1, 5, 7, 9, 11, 19, 71, 121];

function binarySearch($arr, $number): int
{
    $low = 0;
    $high = count($arr) - 1;
    $mid = (int)(($low + $high) / 2);
    while ($low <= $high) {
        if ($number == $arr[$mid]) {
            return $mid;
        } else if ($number > $arr[$mid]) {
            $low = $mid + 1;
            $mid = (int)(($low + $high) / 2);
        } else {
            $high = $mid - 1;
            $mid = (int)(($low + $high) / 2);
        }
    }
    return -1;
}

$number = 122;
if (binarySearch($numbers, $number) == -1) {
    echo "Khong co trong mang";
} else {

    echo 'Tìm thấy số ' . $number . ' o vi tri ' . binarySearch($numbers, $number);
}

function fact($number)
{
    if ($number <= 0) return 1;
    return $number * fact($number - 1);
}

