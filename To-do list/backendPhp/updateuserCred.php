<?php 

include("./connnection.php");

$actionStatus = 0;

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
} else {

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $action = $_REQUEST['action'];
          
          if ($action == 'updatePassword') {

               $userId = 40;
               $newPassword = $_REQUEST['newPassword'];

               $sqlQuery = "UPDATE userinfo SET userPassword = '$newPassword' WHERE userId = '$userId'";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
               } else {
                    $actionStatus = -1;
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } 
          else if ($action == 'deleteAccount') {

               $userId = 40;

               $sqlQuery = "DELETE FROM userinfo WHERE userId = '$userId'";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
               } else {
                    $actionStatus = -1;
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } 
          else if ($action == 'updateProfile') {

               $userFirstName = $_REQUEST['userFirstName'];
               $userLastName = $_REQUEST['userLastName'];
               $userDOB = $_REQUEST['userDOB'];
               $userAge = $_REQUEST['userAge'];
               $userGender = $_REQUEST['userGender'];
               $userPhoneNumber = $_REQUEST['userPhoneNumber'];
               $userCountry = $_REQUEST['userCountry'];
               $userState = $_REQUEST['userState'];
               $userCity = $_REQUEST['userCity'];
               $userDescription = $_REQUEST['userDescription'];

               $userprofilePhoto = $_REQUEST['userprofileImage'];
               $usergroundPhoto = $_REQUEST['userbackgroundImage'];

               $userId = 41;

               $sqlQuery = "INSERT INTO userprofileinfo(userId, userBackgroundPhoto, userProfilePhoto, userFirstName, userLastName, userPhoneNumber, userEmail, userDOB, userStatus, userCountry, userState, userCity, userDiscription) VALUES ('$userId','$userprofilePhoto','$usergroundPhoto','$userFirstName','$userLastName','$userDOB','$userAge','$userGender','$userPhoneNumber','$userCountry','$userState','$userCity','$userDescription')";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
               } else {
                    $actionStatus = -1;
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } 
     }
}


?>