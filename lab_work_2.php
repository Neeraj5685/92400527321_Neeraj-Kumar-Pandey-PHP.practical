<?php


function collegeInfo()
{
    echo "College Information\n";
    echo "College Name: Marwadi University\n";
    echo "Course Name: BCA\n";
    echo "Academic Year: 2025-26\n\n";
}


function studentDetails($name, $enrollmentNo, $semester)
{
    echo "Student Details\n";
    echo "Student Name: $name\n";
    echo "Enrollment Number: $enrollmentNo\n";
    echo "Semester: $semester\n\n";
}


function calculatePercentage($m1, $m2, $m3, $m4, $m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    echo "Total Marks: $total\n";

    return ($total / 500) * 100;
}


function welcomeStudent()
{
    echo "Welcome Student!\n";
}


collegeInfo();

studentDetails("Neeraj Kumar Pandey", "92400527321", "5");

$percentage = calculatePercentage(80, 75, 85, 90, 70);
echo "Percentage: " . number_format($percentage, 2) . "%\n\n";


if(function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function does not exist.";
}

?>