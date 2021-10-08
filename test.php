<?php

function getSum($a, $b): int
{
    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $min = $arr[0];
    $max = $arr[count($arr) - 1];
    if ($a < 0 || $b < 0) $sum = -1;
    else if ($a > $max) $sum = 0;
    else if ($b <= $a) $sum = 0;
    else if ($b <= $min) $sum = 0;
    else {
        $sum = 0;
        if ($b > $max) $b = $max;
        for ($i = 0; $i < count($arr); $i++)
            if ($arr[$i] >= $a && $arr[$i] <= $b)
                $sum += $arr[$i];
    }
    return $sum;
}

echo getSum(90, 120);