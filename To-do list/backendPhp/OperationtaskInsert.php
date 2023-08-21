<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>

<?php

// include("./connection.php");

$insertionStatus = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Assuming you have a form field named 'taskName', 'description', 'todoType', 'priorityLevel', and 'duedate'
    $taskName = trim($_POST['taskName']);
    $description = trim($_POST['description']);
    $todoType = trim($_POST['todoType']);
    $priorityLevel = trim($_POST['priorityLevel']);
    $duedate = trim($_POST['duedate']);
    
    // meta data
    date_default_timezone_set("Asia/Kolkata");
    $userId = 1;
    $taskTime = date("H:i");
    $taskStatus = "Not Completed"; // Added missing semicolon here
    
    // Check if the connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        // Assuming you have a $taskId variable defined somewhere
        $insertQuery = "INSERT INTO tasktable(taskID, UserId, taskTiltle, taskDescription, taskdueDate, taskPriority, taskType, taskTime, taskDate, taskStatus) VALUES ('$taskId','$userId','$taskName','$description','$duedate','$priorityLevel','$todoType','$taskTime',now(),'$taskStatus')";
        
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
