<?php
echo "Welcome to Functions in PHP <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$student_arr = [34, 98, 45, 12, 93, 98];
$sumMarks = processMarks($student_arr);
$avgMark = avgMarks($student_arr);
echo "Total marks scored by student out of 600 is $sumMarks and Average marks is $avgMark <br>";

$student_two = [99, 98, 94, 93, 17, 98];
$marksSum = processMarks($student_two);
$averageMark = avgMarks($student_two);
echo "Total marks scored by student out of 600 is $marksSum and Average marks is $averageMark <br>";
?>