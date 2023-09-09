<?php

include("./connnection.php");

$insertionStatus = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $taskName = trim($_POST['taskName']);
    $description = trim($_POST['description']);
    $todoType = trim($_POST['todoType']);
    $priorityLevel = trim($_POST['priorityLevel']);
    $duedate = trim($_POST['duedate']);
    
    // meta data
    date_default_timezone_set("Asia/Kolkata");
    $userId = 1;
    $taskTime = date("H:i");
    $taskStatus = "Pending";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: Connection");
    }
    else {

        $insertQuery = "INSERT INTO tasktable(UserId, taskTitle, taskDescription, taskdueDate, taskPriority, taskType, taskTime, taskDate, taskStatus) VALUES ('$userId','$taskName','$description','$duedate','$priorityLevel','$todoType','$taskTime',now(),'$taskStatus')";
        
        $insertResult = mysqli_query($conn, $insertQuery);
        if (!$insertResult) {
            die("Connection failed: " . mysqli_error($conn));
        }
        
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