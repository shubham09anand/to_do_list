// control button

const showProfilebutton = document.getElementById("showProfile");
const updateProfilebutton = document.getElementById("updateProfile");
const updatePasswordbutton = document.getElementById("updatePasswordbutton");
const deleteAccountbutton = document.getElementById("deleteAccount");

showProfile.addEventListener("click", () => {
  document.getElementById("userprofile").style.display = "block";
  document.getElementById("updateProfileForm").style.display = "none";
  document.getElementById("userupdatePassword").style.display = "none";
  document.getElementById("userdeleteAccount").style.display = "none";
});
updateProfile.addEventListener("click", () => {
  document.getElementById("userprofile").style.display = "none";
  document.getElementById("updateProfileForm").style.display = "block";
  document.getElementById("userupdatePassword").style.display = "none";
  document.getElementById("userdeleteAccount").style.display = "none";
});
updatePasswordbutton.addEventListener("click", () => {
  document.getElementById("userprofile").style.display = "none";
  document.getElementById("updateProfileForm").style.display = "none";
  document.getElementById("userupdatePassword").style.display = "block";
  document.getElementById("userdeleteAccount").style.display = "none";
});
deleteAccount.addEventListener("click", () => {
  document.getElementById("userprofile").style.display = "none";
  document.getElementById("updateProfileForm").style.display = "none";
  document.getElementById("userupdatePassword").style.display = "none";
  document.getElementById("userdeleteAccount").style.display = "block";
});

//update profile

const updateprofileDetails = document.getElementById("updateprofileDetails");

updateprofileDetails.addEventListener("click", () => {
  var userDescription = document.getElementById("userDescription").value;
  var userFirstName = document.getElementById("userFirstName").value;
  var userLastName = document.getElementById("userLastName").value;
  var userDOB = document.getElementById("userDOB").value;
  var userAge = document.getElementById("userAge").value;
  var userGender = document.getElementById("userGender").value;
  var userPhoneNumber = document.getElementById("userPhoneNumber").value;
  var userCountry = document.getElementById("userCountry").value;
  var userState = document.getElementById("userState").value;
  var userCity = document.getElementById("userCity").value;

  var descriptionWarning = document.getElementById("descriptionWarning");
  var firstnameWarning = document.getElementById("firstnameWarning");
  var lastnameWarning = document.getElementById("lastnameWarning");
  var DOBWarning = document.getElementById("DOBWarning");
  var ageWarning = document.getElementById("ageWarning");
  var genderWarning = document.getElementById("genderWarning");
  var countryWarning = document.getElementById("countryWarning");
  var stateWarning = document.getElementById("stateWarning");
  var cityWarning = document.getElementById("cityWarning");

  function showWarning(element, message) {
    element.textContent = message;
    element.style.opacity = "1";
    setTimeout(() => {
      element.style.opacity = "0";
      element.style.transition = "opacity 2000ms";
    }, 2000);
  }

  if (userDescription == "") {
    showWarning(descriptionWarning, "Enter about yourself");
  } else if (userFirstName == "") {
    showWarning(firstnameWarning, "Enter your First Name");
  } else if (userLastName == "") {
    showWarning(lastnameWarning, "Enter your Last Name");
  } else if (userDOB == "") {
    showWarning(DOBWarning, "Enter your Date Of Birth");
  } else if (userAge == "" || isNaN(userAge)) {
    showWarning(ageWarning, "Please enter a valid age");
  } else if (userGender == "") {
    showWarning(genderWarning, "Select your age");
  } else if (userCountry == "") {
    showWarning(countryWarning, "Enter your country");
  } else if (userState == "") {
    showWarning(stateWarning, "Enter your state");
  } else if (userCity == "") {
    showWarning(cityWarning, "Enter your city");
  }

  // if (userDescription == "") {
  //      descriptionWarning.style.opacity = "1";
  //      setTimeout(()=>{
  //           descriptionWarning.style.opacity = "0";
  //           descriptionWarning.style.transition = "opacity 2000ms";
  //      },2000)
  // }

  // console.log(userFirstName.value);

  // const action = "updateProfile";

  // var connection = new XMLHttpRequest();

  // connection.onreadystatechange = function() {
  //      if (connection.readyState == 4 && connection.status == 200) {
  //           var response = connection.responseText;
  //           console.log(response);
  //           // if (actionStatus == 1) {
  //           //      console.log(actionStatus);

  //           // }
  //      }
  // }

  // var data = "userFirstName=" + encodeURIComponent(userFirstName.value) +
  //      "userLastName=" + encodeURIComponent(userLastName.value) +
  //      "userDOB=" + encodeURIComponent(userDOB.value) +
  //      "userAge=" + encodeURIComponent(userAge.value) +
  //      "userGender=" + encodeURIComponent(userGender.value) +
  //      "userPhoneNumber=" + encodeURIComponent(userPhoneNumber.value) +
  //      "userCountry=" + encodeURIComponent(userCountry.value) +
  //      "userState=" + encodeURIComponent(userState.value) +
  //      "userCity=" + encodeURIComponent(userCity.value) +
  //      "userDescription=" + encodeURIComponent(userDescription.value) +
  //      "&action=" + encodeURIComponent(action);
  // connection.open("POST", "../backendPhp/updateuserCred.php", true);
  // connection.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  // connection.send(data);
});

// update password

const updatePassword = document.getElementById("updatePassword");
const deleteButton = document.getElementById("deleteButton");

updatePassword.addEventListener("click", () => {
  var newPassword = document.getElementById("newPassword");
  const emptyPasswordWarning = document.getElementById("emptyPasswordWarning");
  const action = "updatePassword";

  if (newPassword.value == "") {
    emptyPasswordWarning.style.opacity = 1;
    setTimeout(() => {
      emptyPasswordWarning.style.transition = "opacity 2000ms";
      emptyPasswordWarning.style.opacity = 0;
    }, 2000);
  } else {
    var connection = new XMLHttpRequest();
    connection.onreadystatechange = function () {
      if (connection.readyState == 4 && connection.status == 200) {
        var response = JSON.parse(connection.responseText);
        var actionStatus = response.actionStatus;
        if (actionStatus == 1) {
          document.getElementById("messageBox").className = " flex w-screen h-screen place-content-center items-center absolute z-20 top-1 backdrop-blur-sm";
          document.getElementById("message").innerHTML = "Your Password Has Been Succesfully Updated Updated";
          setTimeout(()=>{
            newPassword.value = "";
            document.getElementById("messageBox").className = "hidden flex w-screen h-screen place-content-center items-center absolute z-20 top-1 backdrop-blur-sm";
          },2000)
        }
      }
    };

    var data =
      "newPassword=" +encodeURIComponent(newPassword.value) +
      "&action=" +encodeURIComponent(action);
    connection.open("POST", "../backendPhp/updateuserCred.php", true);
    connection.setRequestHeader(
      "Content-type", "application/x-www-form-urlencoded");
    connection.send(data);
  }
});

deleteButton.addEventListener("click", () => {
  var feedbackRequest = document.getElementById("feedbackRequest");
  const action = "deleteAccount";
  var connection = new XMLHttpRequest();
  connection.onreadystatechange = function () {
    if (connection.readyState == 4 && connection.status == 200) {
      var response = JSON.parse(connection.responseText);
      var actionStatus = response.actionStatus;
      if (actionStatus == 1) {
        document.getElementById("messageBox").className = " flex w-screen h-screen place-content-center items-center absolute z-20 top-1 backdrop-blur-sm";
        document.getElementById("message").innerHTML = "Your Account Has been Sucessfully Deleted";
        feedbackRequest.style.display = "block";
        setTimeout(()=>{
          document.getElementById("messageBox").className = "hidden flex w-screen h-screen place-content-center items-center absolute z-20 top-1 backdrop-blur-sm";
        },100000)
      }
      
    }
  };

  var data =
    "newPassword=" +encodeURIComponent(newPassword.value) +
    "&action=" +encodeURIComponent(action);
  connection.open("POST", "../backendPhp/updateuserCred.php", true);
  connection.setRequestHeader(
    "Content-type","application/x-www-form-urlencoded");
  connection.send(data);
});

//updateing new image
// profile photo
const uploadprofilephotobutton = document.getElementById("uploadprofilephotobutton");
const profileImage = document.getElementById("profileImage");

uploadprofilephotobutton.addEventListener("change", () => {
  const image = uploadprofilephotobutton.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    const imgUrl = reader.result;
    profileImage.src = imgUrl;
  };

  reader.readAsDataURL(image);
});

// background photo

const uploadnewbackgroundPhotoButton = document.getElementById("uploadnewbackgroundPhotoButton");
const backgroundImage = document.getElementById("backgroundImage");

uploadnewbackgroundPhotoButton.addEventListener("change", () => {
  const image = uploadnewbackgroundPhotoButton.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    const imgUrl = reader.result;
    backgroundImage.src = imgUrl;
  };

  reader.readAsDataURL(image);
});
