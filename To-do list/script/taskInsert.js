var taskName = document.getElementById("taskName");
var description = document.getElementById("description");
var todoType = document.getElementById("todoType");
var priorityLevel = document.getElementById("priorityLevel");
var duedate = document.getElementById("duedateValue");

function addTask() {
  if (taskName.value == "") {
    taskName.className =
      "shadow-lg w-full rounded-lg pl-3 py-1 pb-3 placeholder:font-semibold placeholder:text-md placeholder:text-red-500 focus:outline-none hover:border-b";
    setTimeout(() => {
      taskName.className =
        "shadow-lg w-full rounded-lg pl-3 py-1 pb-3 placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b";
    }, 2000);
  } else if (description.value == "") {
    description.className =
      "shadow-lg mt-1 w-full rounded-lg min-h-[100px] pl-3 py-1 resize-none placeholder:font-semibold placeholder:text-md placeholder:text-red-500 focus:outline-none hover:border-b";
    setTimeout(() => {
      description.className =
        "shadow-lg mt-1 w-full rounded-lg min-h-[100px] pl-3 py-1 resize-none placeholder:font-semibold placeholder:text-md placeholder:text-gray-700 focus:outline-none hover:border-b";
    }, 2000);
  } else if (priorityLevel.innerHTML == "Priority") {
    priorityLevel.className =
      "pl-3 text-md sm:text-lg font-medium -translate-y-1.5 h-fit";
    setTimeout(() => {
      priorityLevel.className =
        "pl-3 text-md sm:text-lg font-medium -translate-y-1.5 h-fit text-red-500";
    }, 2000);
  } else if (duedate.innerHTML == "Due Date:") {
    duedate.className =
      "absolute left-1 pl-1 ml-1 sm:left-0 text-md sm:text-lg bg-white pr-11 pb-2 sm:pt-0 sm:pb-0 sm:pr-6 top-1.5 text-red-500";
    setTimeout(() => {
      duedate.className =
        "absolute left-1 pl-1 ml-1 sm:left-0 text-md sm:text-lg bg-white pr-11 pb-2 sm:pt-0 sm:pb-0 sm:pr-6 top-1.5";
    }, 2000);
  } else {
    var connection = new XMLHttpRequest();
    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        document.getElementById("addTask").style.display = "none";
        var response = connection.responseText;
        if (response.insertionStatus == 1) {
          setTimeout(() => {
            location.reload();
          }, 3000);
        }
      }
    };

    var data =
      "taskName=" +
      encodeURIComponent(taskName.value) +
      "&description=" +
      encodeURIComponent(description.value) +
      "&todoType=" +
      encodeURIComponent(todoType.innerHTML) +
      "&priorityLevel=" +
      encodeURIComponent(priorityLevel.innerHTML) +
      "&duedate=" +
      encodeURIComponent(duedate.innerHTML);

    connection.open("POST", "../backendPhp/OperationtaskInsert.php", true);
    connection.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    connection.send(data);
  }
}
