<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>

<?php

// include("./connection.php");

$insertionStatus = 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);
    $navigate = trim($_POST['navigate']);
    $ui = trim($_POST['ui']);
    $userIp = trim($_POST['userIp']);
    $userplatformDes = trim($_POST['userplatformDes']);

    // meta data
    date_default_timezone_set("Asia/Kolkata");
    $userId = 1;
    $stickyTime = date("H:i");

    echo $email;
    echo "<br>";
    echo $feedback;
    echo "<br>";
    echo $navigate;
    echo "<br>";
    echo $ui;
    echo "<br>";
    echo $userIp;
    echo "<br>";
    echo $userplatformDes;
    echo "<br>";
    echo $stickyTime ;

    
    // Check if the connection is successful
//     if (!$conn) {
//         die("Connection failed: " . mysqli_connect_error());
//     }
//     else {

//         $insertQuery = "INSERT INTO stickytable(UserId, stickyTiltle, stickyDescription, stickyTime, stickyDate) VALUES ('$userId','$stickyName','$stickyDescription','$stickyTime',now())";
        
//         $insertResult = mysqli_query($conn, $insertQuery);
        
//         if ($insertResult) {
//             $insertionStatus = 1;
//         } else {
//             $insertionStatus = -1; 
//         }
//     }

//     $response = array('insertionStatus' => $insertionStatus);
//     echo json_encode($response);
    
//     mysqli_close($conn);
}
?>
