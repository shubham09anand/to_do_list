<?php

include("./connnection.php");

$actionStatus = 0;

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
} else {

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $action = $_REQUEST['action'];

          if ($action == 'Complete') {

               $comuserId = $_REQUEST['comuserId'];
               $comtaskkId = $_REQUEST['comtaskkId'];
               $comtaskType = $_REQUEST['comtaskType'];

               $sqlQuery = "UPDATE tasktable SET taskStatus = 'Completed' WHERE userId = '$comuserId' AND taskId = '$comtaskkId' AND taskType = '$comtaskType'";

               if ($sqlQuery) {

                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
               } else {
                    $actionStatus = -1;
               }

               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } else if ($action == 'Delete') {

               $deluserId = $_REQUEST['deluserId'];
               $deltaskkId = $_REQUEST['deltaskkId'];
               $deltaskType = $_REQUEST['deltaskType'];

               $sqlQuery = "DELETE FROM tasktable WHERE taskId = '$deltaskkId'";
               if ($sqlQuery) {
                    mysqli_query($conn, $sqlQuery);
                    $actionStatus = 1;
               } else {
                    $actionStatus = -1;
               }
               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          } else if ($action == 'Edit') {

               $edituserId = $_REQUEST['edituserId'];
               $edittaskkId = $_REQUEST['edittaskkId'];
               $edittaskType = $_REQUEST['edittaskType'];
               $newtaskTitle = $_REQUEST['newtaskTitle'];
               $newtaskDescription = $_REQUEST['newtaskDescription'];
               $newtadkDueDate = $_REQUEST['newtadkDueDate'];

               if (strlen($newtaskTitle) == 0 || strlen($newtaskDescription) == 0 || strlen($newtadkDueDate) == 0) {
                    $actionStatus = 1;
               } else {
                    $sqlQuery = "UPDATE tasktable SET taskTitle='$newtaskTitle',taskDescription='$newtaskDescription',taskdueDate='$newtadkDueDate' WHERE taskId='$edittaskkId' and userId='$edituserId' and taskType='$edittaskType'";

                    if ($sqlQuery) {
                         mysqli_query($conn, $sqlQuery);
                         $actionStatus = 1;
                    } else {
                         $actionStatus = -1;
                    }
               }
               $response = array('actionStatus' => $actionStatus);
               echo json_encode($response);
               
               mysqli_close($conn);
          }
     }
}


?>