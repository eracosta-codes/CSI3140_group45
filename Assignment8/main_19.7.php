<!-- CSI 3140 - WWW -->
<!-- Assignment 8 -->
<!-- @StevenWilson & @EdgarAcosta -->

<?php
$states = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];

// Search for a word in $states that ends in xas
preg_match('/\b\w*xas\b/i', $states, $compare);
$statesArray[0] = $compare[0];

// Search for a word in $states that begins with k and ends in s (case-insensitive)
preg_match('/\b\w*k\w*s\b/i', $states, $compare);
$statesArray[1] = $compare[0];

// Search for a word in $states that begins with M and ends in s
preg_match('/\b\w*M\w*s\b/', $states, $compare);
$statesArray[2] = $compare[0];

// Search for a word in $states that ends in a
preg_match('/\b\w*a\b/', $states, $compare);
$statesArray[3] = $compare[0];

// Search for a word in $states at the beginning of the string that starts with M
preg_match('/\bM\w+\b/', $states, $compare);
$statesArray[4] = $compare[0];

// Output the array $statesArray
print_r($statesArray);
?>
