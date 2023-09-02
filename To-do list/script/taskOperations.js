document.addEventListener("DOMContentLoaded", function () {
  var taskDesc = document.getElementById("taskDesc");
  var fulltaskDesc = document.getElementById("fulltaskDesc");

  fulltaskDesc.addEventListener("click", () => {
    taskDesc.className = "h-fit";
    fulltaskDesc.classList = "rotate-180";
  });

  var userId, taskId, taskType, taskPriority;

  var selecttaskButtons = document.querySelectorAll("#selectTask");

  var taskcompleteButton = document.getElementById("taskcompleteButton");
  var taskeditButton = document.getElementById("taskeditButton");
  var taskdeleteButton = document.getElementById("taskdeleteButton");

  var task = document.getElementById("task");
  var slectedtaskTitle = document.getElementById("slectedtaskTitle");
  var slectedtaskDescription = document.getElementById(
    "slectedtaskDescription"
  );
  var selectedtaskList = document.getElementById("selectedtaskList");
  var selectedtaskDate = document.getElementById("selectedtaskDate");
  var selectedtaskStatus = document.getElementById("selectedtaskStatus");
  var selectedtaskPriority = document.getElementById("selectedtaskPriority");

  console.log(
    document.getElementById("selectTask").getAttribute("data-taskPriority")
  );

  selecttaskButtons.forEach((button) => {
    button.addEventListener("click", function () {
      userId = button.getAttribute("data-userid");
      taskId = button.getAttribute("data-taskid");
      taskType = button.getAttribute("data-tasktype");
      taskTitle = button.getAttribute("data-tasktitle");
      taskdescription = button.getAttribute("data-taskdescription");
      taskPriority = button.getAttribute("data-taskPriority");
      datataskduedate = button.getAttribute("data-taskduedate");
      selectedtaskstatus = button.getAttribute("data-taskstatus");

      console.log(userId, taskId, taskType, taskPriority);

      slectedtaskTitle.value = taskTitle;
      slectedtaskDescription.value = taskdescription;
      selectedtaskList.innerHTML = taskName;
      selectedtaskDate.value = datataskduedate;
      selectedtaskStatus.innerHTML = selectedtaskstatus;
      // selectedtaskPriority.innerHTML = taskPriority;

      taskcompleteButton.setAttribute("data-userid", userId);
      taskcompleteButton.setAttribute("data-taskid", taskId);
      taskcompleteButton.setAttribute("data-tasktype", taskType);

      taskeditButton.setAttribute("data-userid", userId);
      taskeditButton.setAttribute("data-taskid", taskId);
      taskeditButton.setAttribute("data-tasktype", taskType);

      taskdeleteButton.setAttribute("data-userid", userId);
      taskdeleteButton.setAttribute("data-taskid", taskId);
      taskdeleteButton.setAttribute("data-tasktype", taskType);
    });
  });

  taskcompleteButton.addEventListener("click", () => {
    // console.log(taskcompleteButton.getAttribute('data-userid'), taskcompleteButton.getAttribute('data-taskid'), taskcompleteButton.getAttribute('data-tasktype'));

    const action = "Complete";
    var comuserId = taskcompleteButton.getAttribute("data-userid");
    var comtaskkId = taskcompleteButton.getAttribute("data-taskid");
    var comtaskType = taskcompleteButton.getAttribute("data-tasktype");

    var connection = new XMLHttpRequest();
    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        var response = JSON.parse(connection.responseText);
        console.log(response);
      }
    };

    var data =
      "comuserId=" +
      encodeURIComponent(comuserId) +
      "&comtaskkId=" +
      encodeURIComponent(comtaskkId) +
      "&comtaskType=" +
      encodeURIComponent(comtaskType) +
      "&action=" +
      encodeURIComponent(action);

    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
    connection.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    connection.send(data);
  });

  taskeditButton.addEventListener("click", () => {
    // console.log(taskeditButton.getAttribute('data-userid'), taskeditButton.getAttribute('data-taskid'), taskeditButton.getAttribute('data-tasktype'));

    const action = "Edit";
    var edituserId = taskeditButton.getAttribute("data-userid");
    var edittaskkId = taskeditButton.getAttribute("data-taskid");
    var edittaskType = taskeditButton.getAttribute("data-tasktype");

    var newtaskTitle = document.getElementById("slectedtaskTitle").value;
    var newtaskDescription = document.getElementById(
      "slectedtaskDescription"
    ).value;
    var newtadkDueDate = document.getElementById("selectedtaskDate").value;

    var connection = new XMLHttpRequest();
    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        var response = JSON.parse(connection.responseText);
        console.log(response);
      }
    };

    var data =
      "edituserId=" +
      encodeURIComponent(edituserId) +
      "&edittaskkId=" +
      encodeURIComponent(edittaskkId) +
      "&edittaskType=" +
      encodeURIComponent(edittaskType) +
      "&newtaskTitle=" +
      encodeURIComponent(newtaskTitle) +
      "&newtaskDescription=" +
      encodeURIComponent(newtaskDescription) +
      "&newtadkDueDate=" +
      encodeURIComponent(newtadkDueDate) +
      "&action=" +
      encodeURIComponent(action);

    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
    connection.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    connection.send(data);
  });

  taskdeleteButton.addEventListener("click", () => {
    // console.log( "del" +taskdeleteButton.getAttribute('data-userid'), taskdeleteButton.getAttribute('data-taskid'), taskdeleteButton.getAttribute('data-tasktype'));

    const action = "Delete";
    var deluserId = taskdeleteButton.getAttribute("data-userid");
    var deltaskkId = taskdeleteButton.getAttribute("data-taskid");
    var deltaskType = taskdeleteButton.getAttribute("data-tasktype");

    var connection = new XMLHttpRequest();
    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        var response = JSON.parse(connection.responseText);
        console.log(response);
      }
    };

    var data =
      "deluserId=" +
      encodeURIComponent(deluserId) +
      "&deltaskkId=" +
      encodeURIComponent(deltaskkId) +
      "&deltaskType=" +
      encodeURIComponent(deltaskType) +
      "&action=" +
      encodeURIComponent(action);

    connection.open("POST", "../backendPhp/OperationtaskUpdation.php", true);
    connection.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    connection.send(data);
  });
});
