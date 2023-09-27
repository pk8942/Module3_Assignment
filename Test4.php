<?php
$studentGrades = [
    "student_1" => ["Math" => 80,
        "english" => 85,
        "Science" => 90,
    ],
    "student_2" => [
        "Math" => 70,
        "english" => 80,
        "Science" => 80,
    ],
    "student_3" => [
        "Math" => 60,
        "english" => 38,
        "Science" => 50,
    ],

];
//print_r(array_values($studentGrades["rahim"]));
function gradecalculation($studentGrades)
{
    $totalaverage = [];
    $grades = ["A+", "A", "B+", "B", "C"];
    foreach ($studentGrades as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        if ($average >= 80) {
            $average = $grades[0];
        } elseif ($average >= 70) {
            $average = $grades[1];
        } elseif ($average >= 60) {
            $average = $grades[2];
        } elseif ($average >= 50) {
            $average = $grades[3];
        } elseif ($average >= 40) {
            $average = $grades[4];
        }
        $totalaverage[] = $average;

    }
    return $totalaverage;
}
$averageGrades = gradecalculation($studentGrades);
foreach ($averageGrades as $key => $average) {
    echo "Student " . ($key + 1) . " Average Grade: " . $average . "\n";
}
