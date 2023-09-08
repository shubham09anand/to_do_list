function checkForm() {
if (document.form.userName.value == "") {
     document.getElementById("nameWaring").style.opacity = "1";
     setTimeout(()=>{
          document.getElementById("nameWaring").style.opacity = "0";
          document.getElementById("nameWaring").style.transition = "opacity 2000ms";
     }, 2000)
}
else if (document.form.userPassword.value == "") {
     document.getElementById("passwordWarning").style.opacity = "1"
     setTimeout(()=>{
          document.getElementById("passwordWarning").style.opacity = "0";
          document.getElementById("passwordWarning").style.transition = "opacity 2000ms";
     }, 2000)
}
else{
     
     var connection = new XMLHttpRequest();

     var userName = document.getElementById("userName").value;
     var userEmail = document.getElementById("userEmail").value;
     var userPassword = document.getElementById("userPassword").value;

     connection.onreadystatechange = function () {
          if (connection.readyState == 4 && connection.status == 200) {
              var response = JSON.parse(connection.responseText);
              if (response.insertionStatus == -1) {
                   document.getElementById("unknownWarning").style.opacity = 1;
                   setTimeout(()=>{
                    document.getElementById("unknownWarning").style.transition = "opacity 2000ms";
                    document.getElementById("unknownWarning").style.opacity = "0";
               }, 4000)
                    
              }
              else if (response.insertionStatus == 1) {
                    location.href = "./home.php"
              }
              else if (response.insertionStatus == 2) {
                   document.getElementById("nameWaring").style.opacity = 1;
                    document.getElementById("nameWaring").innerHTML = "This user name is already used";
                    setTimeout(()=>{
                         document.getElementById("nameWaring").style.transition = "opacity 2000ms";
                         document.getElementById("nameWaring").style.opacity = "0";
                    }, 4000)
              }
          }
     }

     connection.open("POST", "..//backendPhp//operationSignup.php", true);
     connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

     var data = "userName=" + (userName) + "&userEmail=" + (userEmail) + "&userPassword=" + (userPassword);

     connection.send(data);
          
     }

}