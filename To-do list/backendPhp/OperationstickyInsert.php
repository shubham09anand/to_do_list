<?php

include("./connnection.php");

$insertionStatus = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $stickyName = trim($_POST['stickyName']);
    $stickyDescription = trim($_POST['stickyDescription']);

    // meta data
    date_default_timezone_set("Asia/Kolkata");
    $userId = 1;
    $stickyTime = date("H:i");
    
    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {

        $insertQuery = "INSERT INTO stickytable(UserId, stickyTiltle, stickyDescription, stickyTime, stickyDate) VALUES ('$userId','$stickyName','$stickyDescription','$stickyTime',now())";
        
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
