<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="../script/components.js"></script>
     <script src="https://cdn.tailwindcss.com"></script>
     <script src="../Assets/jquery-3.7.0.min.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
     <title>Document</title>
</head>

<?php

$conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list');

$fetchQuery = "SELECT * FROM stickytable WHERE userID = 1";

if ($fetchQuery) {

     $result = mysqli_query($conn, $fetchQuery);
     $resultNums = mysqli_num_rows($result);
} else {
}

?>

<body class=" overflow-x-hidden">

     <!-- header starts -->
     <script>
          header()
     </script>
     <!-- header ends -->

     <div class="flex md:space-x-5 min-h-fit">
          <!-- navbar starts -->
          <script>
               dashboard()
          </script>
          <!-- navbar ends -->

          <div id="container" class="w-full lg:w-full mx-auto min-h-screen max-h-fit mt-5 rounded-lg overflow-y-scroll">
               <div class="text-5xl font-semibold mb-8 pt-5 pl-5 flex space-x-5">
                    <div class="text-3xl sm:text-5xl">Sticky Wall</div>
                    <div id="addStickyButton">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 sm:w-14 sm:h-14">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                         </svg>
                    </div>
               </div>

               <div id='addSticky' class='hidden p-3 w-4/5 mx-auto h-68 shadow-lg border-gray-300 rounded-lg relative mb-5 bg-white'>
                    <label for='stickyName' class='block text-sm font-medium text-gray-700 mb-1'></label>
                    <input type='text' name='stickyName' id='stickyName' autocomplete='off' placeholder='Sticky Title' class='shadow-lg w-full rounded-lg pl-3 py-1 pb-3 placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b'>
                    <label for='stickyDescription' class='block text-sm font-medium text-gray-700'></label>
                    <textarea name='stickyDescription' id='stickyDescription' autocomplete='off' class='shadow-lg mt-1 w-full rounded-lg min-h-[100px] pl-3 py-1 resize-none placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b' placeholder='Sticky description'></textarea>
                    <div class='-space-x-5 sm:space-x-5 mt-2'>
                         <div class='scale-75 sm:scale-100 rounded inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-purple-600 active:shadow-none shadow-lg bg-gradient-to-tr from-purple-600 to-purple-500 border-purple-700 text-white'>
                              <span>Cancel</span>
                         </div>
                         <div onclick="checkSticky();" class='scale-75 sm:scale-100 rounded inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-red-600 active:shadow-none shadow-lg bg-gradient-to-tr from-red-600 to-red-500 border-red-700 text-white'>
                              <span>Add</span>
                         </div>
                    </div>
               </div>

               <div class="flex flex-wrap w-full max-h-[680px]">
                    <?php while ($data = mysqli_fetch_array($result)) { 
                         $userId = 1;
                         $taskId = $data['stickyID'];    
                    ?>
                         <div class="scroll space-y-3 m-2 ">
                              <div class="w-[375px] min-h-[20px] max-h-[320px] overflow-y-scroll p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
                                   <div class="flex justify-between">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $data['stickyTiltle'] ?></h5>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-x-square h-5 w-5 mt-1 bg-red-500 rounded-sm overflow-hidden" viewBox="0 0 16 16" data-userId = <?php echo $data['stickyID'] ?>  data-taskID = <?php echo $data['UserId'] ?>  >
                                             <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                             <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                   </div>
                                   <p class="font-normal text-gray-700 dark:text-gray-400"><?php echo $data['stickyDescription'] ?></p>
                              </div>
                         </div>
                    <?php  } ?>
               </div>
          </div>
     </div>

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
     <script>
          $(document).ready(function() {
               $('#Hamburger').click(function() {
                    $("#dashBoard").toggle(500);
               });
               $('#addStickyButton').click(function() {
                    $("#addSticky").toggle(500);
               });
          });

          const panael = document.getElementById('dashBoard');
          panael.style.width = "400px";

          var stickyName = document.getElementById("stickyName");
          var stickyDescription = document.getElementById("stickyDescription");

          function checkSticky() {
               if (stickyName.value == "") {
                    stickyName.className = "shadow-lg w-full rounded-lg pl-3 py-1 pb-3 placeholder:font-semibold placeholder:text-md placeholder:text-red-500 focus:outline-none hover:border-b";
                    setTimeout(() => {
                         stickyName.className = "shadow-lg w-full rounded-lg pl-3 py-1 pb-3 placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b";
                    }, 2000)
               } else if (stickyDescription.value == "") {
                    stickyDescription.className = "shadow-lg mt-1 w-full rounded-lg min-h-[100px] pl-3 py-1 resize-none placeholder:font-semibold placeholder:text-md placeholder:text-red-500 focus:outline-none hover:border-b";
                    setTimeout(() => {
                         stickyDescription.className = "shadow-lg mt-1 w-full rounded-lg min-h-[100px] pl-3 py-1 resize-none placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b";
                    }, 2000)
               } else {
                    var connection = new XMLHttpRequest();
                    connection.onreadystatechange = function() {
                         if (connection.readyState == 4 && connection.status == 200) {
                              var response = connection.responseText;
                              document.getElementById("addSticky").style.display = "none";

                         }
                    }

                    var data = "stickyName=" + encodeURIComponent(stickyName.value) +
                         "&stickyDescription=" + encodeURIComponent(stickyDescription.value);

                    connection.open("POST", "../backendPhp/OperationstickyInsert.php", true);
                    connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    connection.send(data);
               }
          }
     </script>

</body>

</html>