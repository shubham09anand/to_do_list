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

     console.log("hit");
     
     connection.onreadystatechange = function () {
         if (connection.readyState == 4 && connection.status == 200) {
             var response = JSON.parse(connection.responseText);
             console.log(response);
             if (response.loginStatus == 0) {
                 console.log("Something went wrong. Please try again.");
             }
             else if (response.loginStatus == 1) {
                 console.log("Login Success");
             }
             else if (response.loginStatus == 2) {
                 console.log("Wrong user credentials");
             }
         }
     }
     
     var userName = document.getElementById("userName").value;
     var userPassword = document.getElementById("userPassword").value;
     var data = "userName=" + encodeURIComponent(userName) + "&userPassword=" + encodeURIComponent(userPassword);
     
     connection.open("POST", "../backendPhp/operationLogin.php", true);
     connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     connection.send(data);
     
     }

}