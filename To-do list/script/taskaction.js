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

          const action = "complete";
          var comuserId = taskcompleteButton.getAttribute('data-userid');
          var comtaskkId = taskcompleteButton.getAttribute('data-taskid');
          var comtaskType = taskcompleteButton.getAttribute('data-userid');

          var connection = new XMLHttpRequest();
          connection.onreadystatechange = function() {
               if (connection.readyState == 4 && connection.status == 200) {
                    document.getElementById("addTask").style.display = "none";
                    var response = connection.responseText;
                    console.log(response);
                    console.log('responded');
               }
          }

          var data = "comuserId=" + encodeURIComponent(comuserId) +
               "&comtaskkId=" + encodeURIComponent(comtaskkId) +
               "&comtaskType=" + encodeURIComponent(comtaskType)+
               "&action=" + encodeURIComponent(action);

          connection.open("POST", "../backendPhp/OperationtaskInsert.php", true);
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
                    document.getElementById("addTask").style.display = "none";
                    var response = connection.responseText;
                    console.log(response);
                    console.log('responded');
               }
          }

          var data = "edituserId=" + encodeURIComponent(edituserId) +
               "&edittaskkId=" + encodeURIComponent(edittaskkId) +
               "&edittaskType=" + encodeURIComponent(edittaskType)+
               "&action=" + encodeURIComponent(action);

          connection.open("POST", "../backendPhp/OperationtaskInsert.php", true);
          connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          connection.send(data);
     });

     taskdeleteButton.addEventListener('click', () => {
          console.log(taskdeleteButton.getAttribute('data-userid'), taskdeleteButton.getAttribute('data-taskid'), taskdeleteButton.getAttribute('data-tasktype'));

          const action = "dellete";
          var deluserId = taskdeleteButton.getAttribute('data-userid');
          var deltaskkId = taskdeleteButton.getAttribute('data-taskid');
          var deltaskType = taskdeleteButton.getAttribute('data-userid');

          var connection = new XMLHttpRequest();
          connection.onreadystatechange = function() {
               if (connection.readyState == 4 && connection.status == 200) {
                    document.getElementById("addTask").style.display = "none";
                    var response = connection.responseText;
                    console.log(response);
                    console.log('responded');
               }
          }

          var data = "deluserId=" + encodeURIComponent(deluserId) +
               "&deltaskkId=" + encodeURIComponent(deltaskkId) +
               "&deltaskType=" + encodeURIComponent(deltaskType)+
               "&action=" + encodeURIComponent(action);

          connection.open("POST", "../backendPhp/OperationtaskInsert.php", true);
          connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          connection.send(data);
     });


});