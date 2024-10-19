<?php

function calculateResult($marks) {
    $totalMarks = 0;
    $subjectCount = count($marks);
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid\n";
            return;
        } elseif ($mark < 33) {
            echo "Failed in one or more subjects\n";
            return;
        }
        $totalMarks += $mark;
    }

    $averageMarks = $totalMarks / $subjectCount;

    $grade = '';
    switch (true) {
        case $averageMarks >= 80 && $averageMarks <= 100:
            $grade = "A+";
            break;
        case $averageMarks >= 70 && $averageMarks < 80:
            $grade = "A";
            break;
        case $averageMarks >= 60 && $averageMarks < 70:
            $grade = "A-";
            break;
        case $averageMarks >= 50 && $averageMarks < 60:
            $grade = "B";
            break;
        case $averageMarks >= 40 && $averageMarks < 50:
            $grade = "C";
            break;
        case $averageMarks >= 33 && $averageMarks < 40:
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: $averageMarks\n";
    echo "Grade: $grade\n";
}

$marks = array(45, 50, 40, 60, 37);

calculateResult($marks);

?>
