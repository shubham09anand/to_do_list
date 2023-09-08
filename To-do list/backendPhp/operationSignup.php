<?php include("./connnection.php") ?>

<?php

$inserionStaus = 0;

// Check if the connection is successful
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$userName = $_REQUEST['userName'];
$userEmail = $_REQUEST['userEmail'];
$userPassword = $_REQUEST['userPassword'];

// Check if the user already exists in the database
$sqlQuery = "SELECT * FROM userinfo WHERE userName = '$userName'";
$result = mysqli_query($conn, $sqlQuery);

$rowCount = mysqli_num_rows($result);

date_default_timezone_set("Asia/Kolkata");
$currentTime = date("H:i");

if ($rowCount == 0) {
          // Insert the user information into the database
          $insertQuery = "INSERT INTO userinfo(userName, userPassword, userEmail , userJoinedOn , userJoinTime) VALUES ('$userName', '$userPassword', '$userEmail' , now() , '$currentTime')";
          $insertResult = mysqli_query($conn, $insertQuery);
          if ($insertResult) {
               $inserionStaus = 1;
          }else {
               $inserionStaus = -1; 
           }
     } 

else{
     $inserionStaus = 2; 
}


$response = array('insertionStatus' => $inserionStaus);
echo json_encode($response);

mysqli_close($conn);
?>
