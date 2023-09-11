<?php @session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="shortcut icon" type="image/x-icon" href="..//Assets/To-Do-Logo.png"> -->
     <script src="https://cdn.tailwindcss.com"></script>
     <!-- <script src="../script/components.js"></script>
     <script src="../Assets/jquery-3.7.0.min.js"></script>
     <link rel="stylesheet" href="..//style/style.css"> -->
     <title>Document</title>
</head>

<!-- php code -->
<?php

include("..//backendPhp//connnection.php");

if ($conn) {
     if (isset($_SESSION['userID'])) {
          $userID = $_SESSION['userID'];

          $fetchQuery = "SELECT * FROM tasktable WHERE taskType = 'Home' and userID = '$userID' ";

          if ($fetchQuery) {  
               $result = mysqli_query($conn, $fetchQuery);
               $resultNums = mysqli_num_rows($result);
          } else {
          }
      } else {
          echo "User ID not found in session.";
      } 
}
else{

}
?>

<body class="overflow-x-hidden scale-[99%]">
     <!-- navbar starts -->
     <script>
          // header()
     </script>
     <!-- navbar ends -->

     <div class="flex">

          <script>
               // dashboard()
          </script>

          <!-- main starts -->
          <div class=" w-full lg:w-full mx-auto min-h-fit mt-5 max-h-full bg-gray-50 rounded-xl sm:p-5 space-y-3">
               <div class="text-3xl text-left mt-2 sm:text-5xl font-semibold mb-8 pl-5">Home</div>
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
                                   // addTask()
                              </script>
                         </div>

                         <?php

                         while ($data = mysqli_fetch_array($result)) {
                              $userId = $data['userId'];$taskId = $data['taskId'];$taskType = $data['taskType'];$taskDescription = $data['taskDescription'];$taskTitle = $data['taskTitle'];$taskdueDate = $data['taskdueDate'];$taskStatus = $data['taskStatus'];$taskPriority = $data['taskPriority'];
                         ?>

                              <div class="flex w-full bg-white hover:scale-95 duration-200 justify-between border-b-4 border-r-none  rounded-xl rounded-r-xl sm:pl-5 rounde place-content-center item-center">
                                   <div class="w-full pl-2 sm:pr-10 space-y-1">
                                        <div class="flex mt-2 justify-between w-full pr-2 sm:pr-5">
                                             <div class="ml-2 text-sm sm:text-lg font-semibold text-gray-900 dark:text-gray-300 truncate"><?php echo $data['taskTitle'] ?></div>
                                             <div class="ml-2 text-xs text-gray-900 dark:text-gray-300 pt-3"><?php echo $data['taskStatus'] ?></div>
                                        </div>
                                        <div class="flex space-x-5">
                                             <div class="taskdescWidth taskDesc pl-2 text-sm mb-2 max-w-fit sm:w-80 md:w-[500px] lg:w-[600px] h-6 capitalize truncate"><?php echo $data['taskDescription'] ?></div>
                                             <div class="h-5 w-5">
                                                  <svg id="fulltaskDesc" class="fulltaskDesc w-4 h-4 hover:bg-gray-300 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black">
                                                       <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                                  </svg>
                                             </div>

                                        </div>
                                   </div>
                                   <div id="selectTask" class="showtaskDetails bg-red-500 hover:bg-red-600 w-fit bg-gray-50 rounded-r-xl px-2 border-l-4 border-white" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>" data-tasktitle="<?php echo $taskTitle; ?>" data-taskdescription="<?php echo $taskDescription; ?>" data-taskPriority="<?php echo $taskPriority; ?>" data-taskduedate="<?php echo $taskdueDate; ?>" data-taskstatus="<?php echo $taskStatus; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 sm:w-7 h-6 sm:h-7 translate-y-5">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                   </div>
                              </div>

                         <?php } ?>
                    </div>
               </div>
          </div>
          <!-- main ends -->

          <div id="task" class="hidden bg-white w-full sm:w-2/5 min-h-fit shadow-xl p-5 space-y-5 mt-5 rounded-xl absolute md:static right-0 ">
               <div id="taskOperationMessageBox" class="hidden flex place-content-center item-center">
                    <div id="taskOperationMessage" class="bg-blue-300 rounded-md py-2 px-4 absolute top-[95%]">Your task Has been updated</div>
               </div>
               <div class="uppercase text-3xl font-semibold flex justify-between">
                    <div>Task</div>
                    <div>
                         <svg id="taskBar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                    </div>
               </div>
               <input autocomplete="off" type="text" id="slectedtaskTitle" class="shadow-xl font-semibold text-gray-600 tracking-wide text-md py-2 px-3 rounded-xl text-left w-full bg-transparent outline-none" placeholder="Title">
               <textarea autocomplete="off" id="slectedtaskDescription" class="shadow-xl font-thin text-black tracking-wide text-md py-2 px-3 rounded-xl text-left h-48 w-full resize-none bg-transparent outline-none" name="" placeholder="Description of selected task"></textarea>
               <div class="flex px-4 py-2 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between ">
                    <div class="">List</div>
                    <div id="selectedtaskList">Selected list</div>
               </div>
               <div class="flex px-4 py-2 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between ">
                    <div class="">Priority</div>
                    <div id="selectedtaskPriority">Task Priority</div>
               </div>
               <div class="flex px-4 py-1 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between place-content-center item-center">
                    <div class="pt-1">Due Date</div>
                    <input autocomplete="off" id="selectedtaskDate" type="date" value="2023-08-17" class=" shadow-xl bg-gray-100 translate-x-8 p-1 rounded-md shadwo-sm">
               </div>
               <div class="flex px-4 py-2 hover:bg-slate-200 rounded-lg pl-4 pr-10 justify-between">
                    <div>Task Status</div>
                    <div id="selectedtaskStatus">Not Completed</div>
               </div>

               <?php if ($resultNums > 0) { ?>
                    <div class="space-y-5 px-2">
                         <div id="taskcompleteButton" class="mt-20 text-center active:scale-90 justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-500 rounded-md hover:bg-green-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>">Done</div>
                         <div id="taskeditButton" class="mt-20 text-center active:scale-90 justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-yellow-500 rounded-md hover:bg-yellow-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>"> Edit Task</div>
                         <div id="taskdeleteButton" class="text-center active:scale-90 justify-center  px-6 py-3 mb-2 text-lg text-white bg-red-600 rounded-md hover:bg-red-700 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl" data-userid="<?php echo $userId; ?>" data-taskid="<?php echo $taskId; ?>" data-tasktype="<?php echo $taskType; ?>"> Delete Task</div>
                    </div>
               <?php } else { ?>
                    <div class="space-y-5 px-2">
                         <div id="taskcompleteButton" class="mt-20 text-center active:scale-90 justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-green-500 rounded-md hover:bg-green-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl">Done</div>
                         <div id="taskeditButton" class="mt-20 text-center active:scale-90 justify-center w-full px-6 py-3 mb-2 text-lg text-white bg-yellow-500 rounded-md hover:bg-yellow-600 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl"> Edit Task</div>
                         <div id="taskdeleteButton" class="text-center active:scale-90 justify-center  px-6 py-3 mb-2 text-lg text-white bg-red-600 rounded-md hover:bg-red-700 sm:w-auto sm:mb-0" data-primary="green-400" data-rounded="rounded-2xl"> Delete Task</div>
                    </div>
               <?php } ?>
          </div>
     </div>

     <!-- <script src="..//script/taskInsert.js"></script> -->

     <!-- logOut starts -->
     <script>
          // logOut()
     </script>
     <!-- logOut ends -->

     <!-- footer starts -->
     <script>
          // footer()
     </script>
     <!-- footer ends -->

     <!-- <script src="..//script/script.js"></script> -->

     <script>
          // document.getElementById("todoType").innerHTML = 'Home';
     </script>

     <!-- <script src="..//script/taskOperations.js"></script> -->

     <!-- <script>
          $(document).ready(function() {
               $(".showtaskDetails").click(function() {
                    $("#task").show(500);
                    document.getElementById("slectedtaskTitle").focus();
               });
               $("#hamIcon").click(function() {
                    $("#dashBoard").toggle(500);
               });
          });
     </script> -->
</body>


</html>