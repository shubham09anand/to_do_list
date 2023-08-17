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
               document.form.submit();
               // var connection = new XMLHttpRequest();

               // connection.onreadystatechange = function () {
               //      if (connection.readyState == 4 && connection.status == 200) {
               //           document.getElementById("State").innerHTML = connection.responseText;
               //      }
               // }

               // connection.open("GET", "CountryData.php?Data="+Country, true);
               // connection.send();
                    
               }
          
     }