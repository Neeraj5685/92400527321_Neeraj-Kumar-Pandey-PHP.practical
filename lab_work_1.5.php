<?php
echo "Using For Loop\n";

for($i=5; $i<=10; $i++)
{
    echo $i . " ";
}

echo "\nUsing ForEach Loop\n";

$arr = array(5,6,7,8,9,10);

foreach($arr as $value)
{
    echo $value . " ";
}
?>
