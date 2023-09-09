<?php

include("./connnection.php");

$insertionStatus = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $userEmail = trim($_POST['email']);
    $userFeedback = trim($_POST['feedback']);
    $usernavigateRating = trim($_POST['navigate']);
    $useruiRating = trim($_POST['ui']);

    // meta data
    date_default_timezone_set("Asia/Kolkata");
    $userId = 1;
    $feedbackTime = date("H:i");
    
    // Check if the connection is not successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {

        $insertQuery = "INSERT INTO feedbcktable (userId, userEmail, userFeedback, usernavigateRating, useruiRating, feedbackTime) VALUES ('$userId','$userEmail','$userFeedback','$usernavigateRating','$useruiRating','$feedbackTime')";
        
        $insertResult = mysqli_query($conn, $insertQuery);
        
        if ($insertResult) {
            $insertionStatus = 1;
        } else {
            $insertionStatus = -1; 
        }
    }

    $response = array('insertionStatus' => $insertionStatus);
    echo json_encode($response);
    
    mysqli_close($conn);
}
?>
