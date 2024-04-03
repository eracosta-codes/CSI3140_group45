<!-- CSI 3140 - WWW -->
<!-- Lab 8 -->
<!-- @StevenWilson & @EdgarAcosta -->

<!-- Write a PHP script that tests whether an e-mail address 
is input correctly. Verify that the input begins with series 
of characters, followed by the @ character, another series 
of characters, a pe- riod (.) and a final series of characters. 
Test your program, using both valid and invalid e-mail ad- dresses. -->


<?php

function isValidEmail($email) {
    // regular expression to match email pattern
    $pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/';
    return preg_match($pattern, $email);
}

// tests

$email1 = "swils129@uottawa.ca";
$email2 = "steven/wilson.ca"; // invalid

echo "Email: " . ($email1 . " -> " . (isValidEmail($email1) ? "Valid" : "Invalid")) . "\n";
echo "Email: " . ($email2 . " -> " . (isValidEmail($email2) ? "Valid" : "Invalid")) . "\n";

?>