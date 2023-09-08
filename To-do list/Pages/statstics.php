<!DOCTYPE html>
<html lang='en'>

<head>
     <meta charset='UTF-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <script src='https://cdn.tailwindcss.com'></script>
     <title>Document</title>
</head>

<?php
include("..//backendPhp//connnection.php");

$queryTypes = array("Today", "Personal", "Work", "Home", "Study", "Lesiure", "Other");

$counts = array();

foreach ($queryTypes as $type) {
     $query = "SELECT COUNT(*) as count FROM tasktable WHERE taskType = '$type' AND userID = 1";
     $result = mysqli_query($conn, $query);

     if ($result) {
          $row = mysqli_fetch_assoc($result);
          $counts[$type] = $row['count'];
     } else {
          echo "Query error for $type: " . mysqli_error($conn);
     }
}


$Today = $counts["Today"];
$Personal = $counts["Personal"];
$Work = $counts["Work"];
$Home = $counts["Home"];
$Study = $counts["Study"];
$Lesiure = $counts["Lesiure"];
$Other = $counts["Other"];

foreach ($queryTypes as $type) {
     $query = "SELECT COUNT(*) as count FROM tasktable WHERE taskType = '$type' AND userID = 1 AND taskStatus='Not Completed'";
     $result = mysqli_query($conn, $query);

     if ($result) {
          $row = mysqli_fetch_assoc($result);
          $counts[$type] = $row['count'];
     } else {
          echo "Query error for $type: " . mysqli_error($conn);
     }
}

?>

<body class='bg-gray100'>

     <div class='w-1/2 p-10 flex space-x-8'>
          <div>
               <div class="font-sembold mb-6">Today</div>
               <div class="font-sembold mb-6">Personal</div>
               <div class="font-sembold mb-6">Work</div>
               <div class="font-sembold mb-6">Other</div>
               <div class="font-sembold mb-6">Study</div>
               <div class="font-sembold mb-6">Lesiure</div>
               <div>Other</div>
          </div>
          <div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-teal-600 h-7 rounded-full dark:bg-gray-300 w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Today ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-blue-600 h-7 rounded-full w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Personal ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-red-600 h-7 rounded-full dark:bg-red-500 w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Work ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-green-600 h-7 rounded-full dark:bg-green-500 w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Home ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-yellow-400 h-7 rounded-full w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Study ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-indigo-600 h-7 rounded-full dark:bg-indigo-500 w-0 text-right pr-10 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Lesiure ?></div>
               </div>
               <div class="flex space-x-5">
                    <div class='w-[1000px] border-2 rounded-full h-fit mb-4 dark:bg-gray-700 overflow-hidden'>
                         <div class='progress bg-purple-600 h-7 rounded-full dark:bg-purple-500 w-0 text-right pr-1 item-center text-white font-medium'></div>
                    </div>
                    <div><?php echo $Other ?></div>
               </div>
          </div>
     </div>

     <script>
          window.onload = function() {
               const progressBars = document.querySelectorAll('.progress');

               const Today = <?php echo $Today; ?>;
               const Personal = <?php echo $Personal; ?>;
               const Work = <?php echo $Work; ?>;
               const Home = <?php echo $Home; ?>;
               const Study = <?php echo $Study; ?>;
               const Lesiure = <?php echo $Lesiure; ?>;
               const Other = <?php echo $Other; ?>;

               const widths = [Today, Personal, Work, Home, Study, Lesiure, Other];

               progressBars.forEach((progressBar, index) => {
                    progressBar.style.transition = 'width 2000ms';
                    progressBar.style.width =  + 'px';
               });
          };
     </script>

</body>





</body>

</html>