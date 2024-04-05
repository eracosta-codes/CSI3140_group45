<!-- CSI 3140 - WWW -->
<!-- Assignment 8 -->
<!-- @StevenWilson & @EdgarAcosta -->

<!-- 19.4 Write a PHP regular expression pattern that matches a string that 
satisfies the following description: The string must begin with the (uppercase) letter A.
 Any three alphanumeric characters must follow. After these, the letter B (uppercase or 
 lowercase) must be repeated one or more times, and the string must end with two digits. -->


 <?php

function isValidEmail($inputPattern) {
    // regular expression to match inputPattern to pattern
    $pattern = '/^A[a-zA-Z0-9]{3}B+[0-9]{2}$/';
    return preg_match($pattern, $inputPattern);
}

// tests

$pattern1 = "AxyzBBB11";
$pattern2 = "AxyzBBf"; // invalid

echo "Pattern: " . ($pattern1 . " -> " . (isValidEmail($pattern1) ? "Valid" : "Invalid")) . "\n";
echo "Pattern: " . ($pattern2 . " -> " . (isValidEmail($pattern2) ? "Valid" : "Invalid")) . "\n";

?>