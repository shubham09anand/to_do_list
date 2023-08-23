<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>

<?php

$actionStatus = 0;

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

else{

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $action = $_REQUEST['action'];
     
          if ($action == 'Complete') {
     
               $comuserId = $_REQUEST['comuserId'];
               $comtaskkId = $_REQUEST['comtaskkId'];
               $comtaskType = $_REQUEST['comtaskType'];

               echo $comtaskkId;
     
               // $sqlQuery = "UPDATE tasktable SET taskStatus = 'Completed' WHERE userId = '$comuserId' AND taskId = '$comtaskkId' AND taskType = 'Lesiure'";
     
               // if ($sqlQuery) {

               //      mysqli_query($conn,$sqlQuery);
               //      $action = 1;
               //      echo "success";
               // }
               // else {
               //      $action = -1;
               //      echo "denied";
               // }
     
          }
       
     }

}


?>