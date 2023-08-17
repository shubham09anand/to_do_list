$(document).ready(function () {

     $('#Hamburger').click(function () {
          $("#dashBoard").toggle(500);
     });

     $('#taskBar').click(function () {
          $("#task").toggle(500);
     });
        
     $('#addTaskButton').click(function () {
          $("#addTask").toggle(500);
     });
     
});