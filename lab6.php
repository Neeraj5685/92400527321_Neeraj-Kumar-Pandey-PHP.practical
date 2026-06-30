<?php
$str = "PHP is a popular scripting language";

// 1) strlen() - get length of string
echo "Length: " . strlen($str) . "\n";

// 2) strpos() - find position of a word/letter
$pos = strpos($str, "popular");
echo "Position of 'popular': " . $pos . "\n";

// 3) str_word_count() - count number of words
echo "Word Count: " . str_word_count($str) . "\n";

// 4) strrev() - reverse the string
echo "Reversed: " . strrev($str) . "\n";

// 5) strtolower() - convert to lowercase
echo "Lowercase: " . strtolower($str) . "\n";

// 6) strtoupper() - convert to uppercase
echo "Uppercase: " . strtoupper($str) . "\n";
?>