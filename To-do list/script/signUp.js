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
              console.log(response);
              if (response.insertionStatus == -1) {
                    console.log("Soemething Went wrong plese try again");
              }
              else if (response.insertionStatus == 1) {
                    console.log("Sign Up Success");
              }
              else if (response.insertionStatus == 2) {
                    console.log("User With this id alreday exists");
              }
          }
     }

     connection.open("POST", "..//backendPhp//operationSignup.php", true);
     connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

     var data = "userName=" + (userName) + "&userEmail=" + (userEmail) + "&userPassword=" + (userPassword);

     connection.send(data);
          
     }

}