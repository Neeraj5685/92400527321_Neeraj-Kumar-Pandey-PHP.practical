<?php
$month = date("m");

if($month == 1)
    echo "January\n";
else if($month == 2)
    echo "February\n";
else if($month == 3)
    echo "March\n";
else if($month == 4)
    echo "April\n";
else if($month == 5)
    echo "May\n";
else if($month == 6)
    echo "June\n";
else
    echo "Other Month\n";

echo "\nUsing Switch Case\n";

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
