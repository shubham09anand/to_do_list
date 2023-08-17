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

let dueDate = document.getElementById("dueDate");
let duedateValue = document.getElementById("duedateValue");

dueDate.addEventListener('change', () => {
     duedateValue.innerHTML = dueDate.value;
     console.log(dueDate.value)
});
