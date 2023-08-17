<?php $conn =  mysqli_connect($servername = 'localhost', $username = 'root', $password = '', $database = 'to-do list'); ?>
<?php

// Check if the form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Retrieve the values from the form using $_REQUEST
     $userProfilePhoto = $_FILES['userProfilePhoto'];
     $userBackgroundPhoto = $_FILES['userBackgroundPhoto'];
     $userFirstName = $_REQUEST['userFirstName'];
     $userLastName = $_REQUEST['userLastName'];
     $userPhoneNumber = $_REQUEST['userPhoneNumber'];
     $userEmail = $_REQUEST['userEmail'];
     $userDOB = $_REQUEST['userDOB']; // Assuming the datepicker field has the name "datepicker"
     $userStatus = $_REQUEST['userStatus'];
     $userCountry = $_REQUEST['userCountry'];
     $userState = $_REQUEST['userState'];
     $userCity = $_REQUEST['userCity'];
     $userDescription = $_REQUEST['userDescription'];

     echo($userDOB);

     //manuplating photos name starts

     $tempName1 = $userProfilePhoto['tmp_name'];
     $tempName2 = $userBackgroundPhoto['tmp_name'];

     $photoName1 = $userProfilePhoto['name'];
     $photoName2 = $userBackgroundPhoto['name'];

     $photo1 = 'profile_' . uniqid() . '_' . $photoName1;
     $photo2 = 'background_' . uniqid() . '_' . $photoName2;

     $destinationDir1 = '../Photos/userProfilePhoto/';
     $destinationDir2 = '../Photos/userBackgroundPhoto/';

     move_uploaded_file($tempName2, $destinationDir1 . $photo1);
     move_uploaded_file($tempName1, $destinationDir2 . $photo2);

     //data base part

     $sqlQuery = "INSERT INTO userprofileinfo(userId,userBackgroundPhoto, userProfilePhoto, userFirstName, userLastName, userPhoneNumber, userEmail, userDOB, userStatus, userCountry, userState, userCity, userDiscription) VALUES (10,'$photo2','$photo1','$userFirstName','$userLastName','$userPhoneNumber','$userEmail','$userDOB','$userStatus','$userCountry','$userState','$userCity','$userDescription')";

     mysqli_query($conn,$sqlQuery);
}

?>