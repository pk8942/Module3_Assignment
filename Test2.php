<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function iseven($number)
{
    return $number % 2 == 1;
}
$newnumber = array_filter($numbers, "iseven", true);
print_r($newnumber);
