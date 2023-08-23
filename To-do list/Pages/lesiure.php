<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="../script/components.js"></script>
     <script src="../Assets/jquery-3.7.0.min.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
     <title>Document</title>
</head>

<!-- php code -->
<?php

$conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list');

$fetchQuery = "SELECT * FROM `tasktable` WHERE taskType = 'lesiure' and userID = 1";

if ($fetchQuery) {

     $result = mysqli_query($conn, $fetchQuery);
} else {
}

?>

<body class="">
     <!-- navbar starts -->
     <script>
          header()
     </script>
     <!-- navbar ends -->

     <div class="flex space-x-5">

          <script>
               dashboard()
          </script>

          <!-- main starts -->
          <div class="w-full lg:w-full mx-auto min-h-fit mt-5 max-h-full bg-gray-50 rounded-xl p-5 space-y-3">
               <div class="text-3xl text-left mt-2 sm:text-5xl font-semibold mb-8">Lesiure</div>
               <div class="w-full min-h-[600px] max-h-[601px] overflow-y-scroll border rounded-xl">
                    <div class="space-y-3 p-5">
                         <div class="flex w-full justify-between py-3 border px-5 rounded-xl">
                              <div id="addTaskButton" class="active:bg-gray-200 rounded-lg">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                                   </svg>
                              </div>
                              <div class="text-base">Add New Task</div>
                         </div>

                         <div>
                              <script>
                                   addTask()
                              </script>
                         </div>

                         <?php while ($data = mysqli_fetch_array($result)) {

                              $userId = $data['userId'];
                              $taskId = $data['taskId'];
                              $taskType = $data['taskType'];

                         ?>

                              <div class="flex w-full justify-between border border-b-4 px-5 rounded-xl place-content-center item-center">
                                   <div>
                                        <div id="taskTitle" class=" w-full pt-3 ml-2 text-sm sm:text-lg font-semibold text-gray-900 dark:text-gray-300"><?php echo $data['taskTitle'] ?></div>
                                        <div id="taskDescription" class="pl-2 text-sm mb-2 w-full h-6 text-ellipsis overflow-hidden capitalize"><?php echo $data['taskDescription'] ?></div>
                                   </div>
                                   <div class="hover:bg-slate-200 h-fit w-fit mt-6 rounded-md">
                                        <svg id="selectTask" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 sm:w-7 h-6 sm:h-7">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                   </div>
                              </div>

                         <?php } ?>
                    </div>
               </div>
          </div>
          <!-- main ends -->

          <div id="task" class="w-full sm:w-2/5 min-h-fit bg-gray-200 p-5 space-y-5 mt-5 rounded-xl absolute md:static right-0 ">
               <div class="uppercase text-3xl font-semibold flex justify-between">
                    <div>Task</div>
                    <div>
                         <svg id="taskBar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                    </div>
               </div>
               <div id="slectedtaskTitle" class="font-thin text-gray-600 tracking-wide text-md border border-gray-600 py-2 px-3 rounded-xl text-left ">Tiltle
                    of
                    selected task</div>
               <div id="slectedtaskDescription" class="font-thin text-gray-600 tracking-wide text-md border border-gray-600 py-2 px-3 rounded-xl text-left h-48">
                    Discription of selected task</div>
               <div class="flex px-4 py-1 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between ">
                    <div class="">List</div>
                    <div>Selected list</div>
               </div>
               <div class="flex px-4 py-1 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between">
                    <div class="">Due Date</div>
                    <div>Date</div>
               </div>

               <div class="space-y-5 px-2">
                    <div id="taskcompleteButton" class="mt-20 text-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-500 rounded-md hover:bg-green-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>">Done</div>
                    <div id="taskeditButton" class="mt-20 text-center justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-yellow-500 rounded-md hover:bg-yellow-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>"> Edit Task</div>
                    <div id="taskdeleteButton" class="text-center justify-center  px-6 py-3 mb-2 text-lg text-white bg-red-600 rounded-md hover:bg-red-700 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>"> Delete Task</div>
               </div>

          </div>
     </div>

     <script src="..//script/taskInsert.js"></script>

     <!-- logOut starts -->
     <script>
          logOut()
     </script>
     <!-- logOut ends -->

     <!-- footer starts -->
     <script>
          footer()
     </script>
     <!-- footer ends -->

     <script src="..//script/script.js"></script>


     <script>
          document.getElementById("todoType").innerHTML = 'Lesiure';
     </script>


     <script>
          document.addEventListener('DOMContentLoaded', function() {

               var userId, taskId, taskType;

               var selecttaskButtons = document.querySelectorAll("#selectTask");

               var taskcompleteButton = document.getElementById("taskcompleteButton");
               var taskeditButton = document.getElementById("taskeditButton");
               var taskdeleteButton = document.getElementById("taskdeleteButton");

               selecttaskButtons.forEach((button) => {
                    button.addEventListener('click', function() {

                         userId = button.getAttribute('data-userid');
                         taskId = button.getAttribute('data-taskid');
                         taskType = button.getAttribute('data-tasktype');

                         console.log(userId, taskId, taskType);

                         taskcompleteButton.setAttribute('data-userid', userId);
                         taskcompleteButton.setAttribute('data-taskid', taskId);
                         taskcompleteButton.setAttribute('data-tasktype', taskType);

                         taskeditButton.setAttribute('data-userid', userId);
                         taskeditButton.setAttribute('data-taskid', taskId);
                         taskeditButton.setAttribute('data-tasktype', taskType);

                         taskdeleteButton.setAttribute('data-userid', userId);
                         taskdeleteButton.setAttribute('data-taskid', taskId);
                         taskdeleteButton.setAttribute('data-tasktype', taskType);

                    });
               });

               taskcompleteButton.addEventListener('click', () => {
                    console.log(taskcompleteButton.getAttribute('data-userid'), taskcompleteButton.getAttribute('data-taskid'), taskcompleteButton.getAttribute('data-tasktype'));

                    const action = "Complete";
                    var comuserId = taskcompleteButton.getAttribute('data-userid');
                    var comtaskkId = taskcompleteButton.getAttribute('data-taskid');
                    var comtaskType = taskcompleteButton.getAttribute('data-userid');

                    var connection = new XMLHttpRequest();
                    connection.onreadystatechange = function() {
                         if (connection.readyState == 4 && connection.status == 200) {
                              var response = connection.responseText;
                              console.log(response);
                         }
                    }

                    var data = "comuserId=" + encodeURIComponent(comuserId) +
                         "&comtaskkId=" + encodeURIComponent(comtaskkId) +
                         "&comtaskType=" + encodeURIComponent(comtaskType)+
                         "&action=" + encodeURIComponent(action);

                    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
                    connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    connection.send(data);
               });


               taskeditButton.addEventListener('click', () => {
                    console.log(taskeditButton.getAttribute('data-userid'), taskeditButton.getAttribute('data-taskid'), taskeditButton.getAttribute('data-tasktype'));

                    const action = "edit";
                    var edituserId = taskeditButton.getAttribute('data-userid');
                    var edittaskkId = taskeditButton.getAttribute('data-taskid');
                    var edittaskType = taskeditButton.getAttribute('data-userid');

                    var connection = new XMLHttpRequest();
                    connection.onreadystatechange = function() {
                         if (connection.readyState == 4 && connection.status == 200) {
                              var response = connection.responseText;
                              console.log(response);
                         }
                    }

                    var data = "edituserId=" + encodeURIComponent(edituserId) +
                         "&edittaskkId=" + encodeURIComponent(edittaskkId) +
                         "&edittaskType=" + encodeURIComponent(edittaskType)+
                         "&action=" + encodeURIComponent(action);

                    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
                    connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    connection.send(data);
               });

               taskdeleteButton.addEventListener('click', () => {
                    console.log(taskdeleteButton.getAttribute('data-userid'), taskdeleteButton.getAttribute('data-taskid'), taskdeleteButton.getAttribute('data-tasktype'));

                    const action = "delete";
                    var deluserId = taskdeleteButton.getAttribute('data-userid');
                    var deltaskkId = taskdeleteButton.getAttribute('data-taskid');
                    var deltaskType = taskdeleteButton.getAttribute('data-userid');

                    var connection = new XMLHttpRequest();
                    connection.onreadystatechange = function() {
                         if (connection.readyState == 4 && connection.status == 200) {
                              var response = connection.responseText;
                              console.log(response);
                         }
                    }

                    var data = "deluserId=" + encodeURIComponent(deluserId) +
                         "&deltaskkId=" + encodeURIComponent(deltaskkId) +
                         "&deltaskType=" + encodeURIComponent(deltaskType)+
                         "&action=" + encodeURIComponent(action);

                    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
                    connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    connection.send(data);
               });


          });
     </script>
</body>

</html>