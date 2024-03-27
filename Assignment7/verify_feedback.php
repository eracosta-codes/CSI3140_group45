<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $comments = $_POST['comments'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];

    $response = array('success' => true, 'message' => 'thank you for your feedback');
}   else {
    $response = array('success' => false, 'message' => 'Invalid request');
}

header('Content-Type: application/json');
echo json_encode($response);
?>