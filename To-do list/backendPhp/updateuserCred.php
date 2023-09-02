<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>

<?php

$actionStatus = 0;

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
} else {

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $action = $_REQUEST['action'];
          
          if ($action == 'updatePassword') {

               $userId = 41;
               $newPassword = $_REQUEST['newPassword'];

               $sqlQuery = "UPDATE userinfo SET userPassword = '$newPassword' WHERE userId = '$userId'";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
                    echo "success";
               } else {
                    $actionStatus = -1;
                    echo "denied";
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } 
          else if ($action == 'deleteAccount') {

               $userId = 41;

               $sqlQuery = "DELETE FROM userinfo WHERE userId = '$userId'";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
                    echo "success";
               } else {
                    $actionStatus = -1;
                    echo "denied";
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } 
          else if ($action == 'updateProfile') {

               echo "update section";

               $userFirstName = $_REQUEST['userFirstName'];
               echo $userFirstName;


               // $userId = 41;

               // $sqlQuery = "DELETE FROM userinfo WHERE userId = '$userId'";

               // if ($sqlQuery) {

               //      mysqli_query($conn, $sqlQuery);
               //      $actionStatus = 1;
               //      echo "success";
               // } else {
               //      $actionStatus = -1;
               //      echo "denied";
               // }

               // $response = array('actionStatus' => $actionStatus);
               // echo json_encode($response);
               
               // mysqli_close($conn);
          } 
     }
}


?>