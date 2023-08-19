<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>


<?php

$loginStatus = 0;

// Check if the connection is successful
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$userName = $_REQUEST['userName'];
$userPassword = $_REQUEST['userPassword'];

$sqlQuery = "SELECT * FROM userinfo WHERE userName = '$userName' and userPassword = '$userPassword'";

if (!$sqlQuery) {
     die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, $sqlQuery);

$dataQuery = mysqli_fetch_array($result);

$rowCount = mysqli_num_rows($result);

if ($rowCount == 1) {

     if ($dataQuery['userPassword'] == $userPassword) {
          $loginStatus = 1;          
          $_SESSION['userID'] = $dataQuery['userID'];
     };

     } 
else {
          $loginStatus = -1;
     }

     $response = array('loginStatus' => $loginStatus);
     echo json_encode($response);
     
     mysqli_close($conn);
?>
