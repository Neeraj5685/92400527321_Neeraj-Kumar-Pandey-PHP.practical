<?php
$month = date("m");

if($month == 1)
    echo "January<br>";
else if($month == 2)
    echo "February<br>";
else if($month == 3)
    echo "March<br>";
else if($month == 4)
    echo "April<br>";
else if($month == 5)
    echo "May<br>";
else if($month == 6)
    echo "June<br>";
else
    echo "Other Month<br>";

echo "<br>Using Switch Case:<br>";

switch($month)
{
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    default: echo "Other Month";
}
?>