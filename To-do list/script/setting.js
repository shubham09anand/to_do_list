// control button

const showProfilebutton = document.getElementById("showProfile")
const updateProfilebutton = document.getElementById("updateProfile")
const updatePasswordbutton = document.getElementById("updatePasswordbutton")
const deleteAccountbutton = document.getElementById("deleteAccount")

showProfile.addEventListener('click', () => {
     document.getElementById("userprofile").style.display = "block";
     document.getElementById("updateProfileForm").style.display = "none";
     document.getElementById("userupdatePassword").style.display = "none";
     document.getElementById("userdeleteAccount").style.display = "none";
});
updateProfile.addEventListener('click', () => {
     document.getElementById("userprofile").style.display = "none";
     document.getElementById("updateProfileForm").style.display = "block";
     document.getElementById("userupdatePassword").style.display = "none";
     document.getElementById("userdeleteAccount").style.display = "none";
});
updatePasswordbutton.addEventListener('click', () => {
     document.getElementById("userprofile").style.display = "none";
     document.getElementById("updateProfileForm").style.display = "none";
     document.getElementById("userupdatePassword").style.display = "block";
     document.getElementById("userdeleteAccount").style.display = "none";
});
deleteAccount.addEventListener('click', () => {
     document.getElementById("userprofile").style.display = "none";
     document.getElementById("updateProfileForm").style.display = "none";
     document.getElementById("userupdatePassword").style.display = "none";
     document.getElementById("userdeleteAccount").style.display = "block";
});

//update profile

const updateprofileDetails = document.getElementById("updateprofileDetails");

updateprofileDetails.addEventListener('click', () => {
     var userFirstName = document.getElementById("userFirstName");
     var userLastName = document.getElementById("userLastName");
     var userDOB = document.getElementById("userDOB");
     var userAge = document.getElementById("userAge");
     var userGender = document.getElementById("userGender");
     var userPhoneNumber = document.getElementById("userPhoneNumber");
     var userCountry = document.getElementById("userCountry");
     var userState = document.getElementById("userState");
     var userCity = document.getElementById("userCity");
     var userDescription = document.getElementById("userDescription");

     console.log(userFirstName.value);

     const action = "updateProfile";

     var connection = new XMLHttpRequest();

     connection.onreadystatechange = function() {
          if (connection.readyState == 4 && connection.status == 200) {
               var response = connection.responseText;
               console.log(response);
               // if (actionStatus == 1) {
               //      console.log(actionStatus);

               // }
          }
     }

     var data = "userFirstName=" + encodeURIComponent(userFirstName.value) +
          "userLastName=" + encodeURIComponent(userLastName.value) +
          "userDOB=" + encodeURIComponent(userDOB.value) +
          "userAge=" + encodeURIComponent(userAge.value) +
          "userGender=" + encodeURIComponent(userGender.value) +
          "userPhoneNumber=" + encodeURIComponent(userPhoneNumber.value) +
          "userCountry=" + encodeURIComponent(userCountry.value) +
          "userState=" + encodeURIComponent(userState.value) +
          "userCity=" + encodeURIComponent(userCity.value) +
          "userDescription=" + encodeURIComponent(userDescription.value) +
          "&action=" + encodeURIComponent(action);
     connection.open("POST", "../backendPhp/updateuserCred.php", true);
     connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     connection.send(data);
})


// update password

const updatePassword = document.getElementById("updatePassword");
const deleteButton = document.getElementById("deleteButton");

updatePassword.addEventListener('click', () => {
     var newPassword = document.getElementById("newPassword");
     const emptyPasswordWarning = document.getElementById("emptyPasswordWarning");
     const action = "updatePassword";

     if (newPassword.value == "") {
          emptyPasswordWarning.style.opacity = 1;
          setTimeout(() => {
               emptyPasswordWarning.style.transition = "opacity 2000ms";
               emptyPasswordWarning.style.opacity = 0;
          }, 2000)
     } else {
          var connection = new XMLHttpRequest();
          connection.onreadystatechange = function() {
               if (connection.readyState == 4 && connection.status == 200) {
                    var response = JSON.parse(connection.responseText);
                    var actionStatus = (response.actionStatus);
                    if (actionStatus == 1) {
                         console.log(actionStatus);
                         newPassword.value == "";
                         document.getElementById("messageBox").style = block;
                         document.getElementById("message").innerHTML = "Your Password Has Been Succesfully Updated Updated";
                    }
               }
          }

          var data = "newPassword=" + encodeURIComponent(newPassword.value) +
               "&action=" + encodeURIComponent(action);
          connection.open("POST", "../backendPhp/updateuserCred.php", true);
          connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          connection.send(data);
     }
})

deleteButton.addEventListener('click', () => {
     const action = "deleteAccount";
     var connection = new XMLHttpRequest();
     connection.onreadystatechange = function() {
          if (connection.readyState == 4 && connection.status == 200) {
               var response = JSON.parse(connection.responseText);
               console.log(response);
          }
     }

     var data = "newPassword=" + encodeURIComponent(newPassword.value) +
          "&action=" + encodeURIComponent(action);
     connection.open("POST", "../backendPhp/updateuserCred.php", true);
     connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     connection.send(data);
})
