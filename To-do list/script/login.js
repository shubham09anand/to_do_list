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
        
        connection.onreadystatechange = function () {
            if (connection.readyState == 4 && connection.status == 200) {
                var response = JSON.parse(connection.responseText);
                console.log(response);
                if (response.loginStatus == 0) {
                 document.getElementById("warning").style.opacity = "1";
                 document.getElementById("warning").innerHTML = "Something went wrong. Please try agian.";
                }
                else if (response.loginStatus == 1) {
                    setTimeout(() => {
                        location.href = "..//Pages//home.php"
                    }, 2000);
                }
                else if (response.loginStatus == -1) {
                 document.getElementById("warning").style.opacity = "1";
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