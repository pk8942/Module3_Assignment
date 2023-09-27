<?php
$grades = [85, 92, 78, 88, 95];
function sortgradenumber($grade1, $grade2)
{
    if ($grade1 > $grade2) {
        return -1;
    } elseif ($grade1 < $grade2) {
        return 1;
    } else {
        return 0;
    }
}
usort($grades, "sortgradenumber");
print_r($grades);
