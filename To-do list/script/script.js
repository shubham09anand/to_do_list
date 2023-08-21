$(document).ready(function () {

     $("#Hamburger").click(function () {
          $("#dashBoard").toggle(500);
     });

     $("#taskBar").click(function () {
          $("#task").toggle(500);
     });
        
     $("#addTaskButton").click(function () {
          $("#addTask").toggle(500);
     });
     
});

//date setting starts

let dueDate = document.getElementById("taskdueDate");
let duedateValue = document.getElementById("duedateValue");

dueDate.addEventListener("change", () => {
  duedateValue.innerHTML = dueDate.value;
});

//date setting ends



// logout starts
const logoutBox = document.getElementById("logoutBox");
const proccedLogout = document.getElementById("proccedLogout");
const cancelLogout = document.getElementById("cancelLogout");

$(document).ready(function () {
  $("#logOut").click(() => $("#logoutBox").toggle(200));
});

proccedLogout.addEventListener("click", () => handleLogout("yes"));
cancelLogout.addEventListener("click", () => handleLogout("no"));

function handleLogout(status) {
  console.log(status);
  if (status == "yes" || status == "no") {
    $("#logoutBox").toggle(200);
  }
}

document.addEventListener("keydown", (event) => {
  if (event.key === "Escape") {
    $("#logoutBox").hide(200);
  }
});

// logout ends


// priorityBox starts

var priorityBox = document.getElementById("taskPriority");
var priorityLevel = document.getElementById("priorityLevel");
priorityBox
.addEventListener("change" , ()=>{
  priorityLevel.innerHTML = priorityBox.value;
})

// priorityBox ends
