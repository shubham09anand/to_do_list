const feedbackBtn = document.getElementById("feedbackBtn");
const nothanksBtn = document.getElementById("nothanksBtn");

const mailWarning = document.getElementById("mailWarning");
const feedbackWarning = document.getElementById("feedbackWarning");
const navigateWarning = document.getElementById("navigateWarning");
const uiWarning = document.getElementById("uiWarning");

feedbackBtn.addEventListener('click' , ()=>{
     var email = document.getElementById("email").value;
     var feedback = document.getElementById("feedback").value;
     var navigate = document.getElementById("navigate").value;
     var ui = document.getElementById("ui").value;

     if (email == "") {
          mailWarning.style.opacity = 1;
          setTimeout(()=>{
               mailWarning.style.transition = "opacity 2000ms";
               mailWarning.style.opacity = "0";
          },2000)
     }
     else if (feedback == "") {
          feedbackWarning.style.opacity = 1;
          setTimeout(()=>{
               feedbackWarning.style.transition = "opacity 2000ms";
               feedbackWarning.style.opacity = "0";
          },2000)
     }
     else if (navigate == "Choose a Option") {
          navigateWarning.style.opacity = 1;
          setTimeout(()=>{
               navigateWarning.style.transition = "opacity 2000ms";
               navigateWarning.style.opacity = "0";
          },2000)
     }
     else if (ui == "Choose a Option") {
          uiWarning.style.opacity = 1;
          setTimeout(()=>{
               uiWarning.style.transition = "opacity 2000ms";
               uiWarning.style.opacity = "0";
          },2000)
     }
     else {
         
          var userplatformDes = platform.description;
         
          fetch("https://api.ipify.org?format=json")
            .then((res) => res.json())
            .then((data) => {
              var userIp = data.ip;
              var connection = new XMLHttpRequest();
              connection.onreadystatechange = function () {
                if (connection.readyState == 4 && connection.status == 200) {
                    var response = connection.responseText;
                    console.log(response);
                }
              };
      
              connection.open("POST", "..//backendPhp//feedback.php", true);

              connection.setRequestHeader("Content-type","application/x-www-form-urlencoded");
              var data = "email=" + (email) + "&feedback=" + (feedback) + "&navigate=" + (navigate) + "&ui=" + (ui) + "&userIp=" + (userIp) + "&userplatformDes=" + (userplatformDes);

              connection.send(data);
    
            }).catch((err) => console.log(err));
        }
})

nothanksBtn.addEventListener('click',()=>{
     document.getElementById("email").value = "";
     document.getElementById("feedback").value = "";
     document.getElementById("navigate").value = "";
     document.getElementById("ui").value = "";

})
