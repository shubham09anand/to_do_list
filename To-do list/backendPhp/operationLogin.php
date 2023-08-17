<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>

<?php

$inserionStaus = false;

// Check if the connection is successful
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

// Get user input
$userName = $_REQUEST['userName'];
$userPassword = $_REQUEST['userPassword'];

$sqlQuery = "SELECT * FROM userinfo WHERE userName = '$userName' and userPassword = '$userPassword";

$result = mysqli_query($conn, $sqlQuery);

$dataQuery = mysqli_fetch_array($result);

$rowCount = mysqli_num_rows($result);

if ($rowCount == 1) {

     if ($dataQuery['userPassword'] == $userPassword) {
          $_SESSION['userPassword'] = $userPassword;
          echo("hi");
     };

     } 
else {
          echo "nothinng";
     }

mysqli_close($conn);
?>
