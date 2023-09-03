function checkForm() {
  if (document.form.userFirstName.value == "") {
    document.getElementById("firstnameWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("firstnameWarning").style.opacity = "0";
      document.getElementById("firstnameWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else if (document.form.userLastName.value == "") {
    document.getElementById("lastnameWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("lastnameWarning").style.opacity = "0";
      document.getElementById("lastnameWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else if (document.form.userDOB.value == "") {
    document.getElementById("DOBWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("DOBWarning").style.opacity = "0";
      document.getElementById("DOBWarning").style.transition = "opacity 2000ms";
    }, 2000);
  } else if (document.form.userCountry.value == "") {
    document.getElementById("CountryWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("CountryWarning").style.opacity = "0";
      document.getElementById("CountryWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else if (document.form.userState.value == "") {
    document.getElementById("StateWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("StateWarning").style.opacity = "0";
      document.getElementById("StateWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else if (document.form.userCity.value == "") {
    document.getElementById("CityWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("CityWarning").style.opacity = "0";
      document.getElementById("CityWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else if (document.form.userDescription.value == "") {
    document.getElementById("descriptionWarning").style.opacity = "1";
    setTimeout(() => {
      document.getElementById("descriptionWarning").style.opacity = "0";
      document.getElementById("descriptionWarning").style.transition =
        "opacity 2000ms";
    }, 2000);
  } else {
    document.form.submit();
  }
}

const fileInput1 = document.querySelector("#userBackgroundPhoto");
const imgArea1 = document.querySelector("#imgArea-1");
const svgElement1 = document.getElementById("svg-1");
const textElement1 = document.getElementById("text-1");

fileInput1.addEventListener("change", () => {
  const image = fileInput1.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    const imgUrl = reader.result;
    const img = document.createElement("img");
    img.className =
      "w-32 h-32 rounded-full bg-cover absolute z-20 overflow-hidden";
    img.src = imgUrl;
    imgArea1.appendChild(img);

    svgElement1.style.display = "none";
    textElement1.style.display = "none";
  };

  if (image && isImageFile(image)) {
    reader.readAsDataURL(image);
  }
});

const fileInput2 = document.querySelector("#userProfilePhoto");
const imgArea2 = document.querySelector("#imgArea-2");
const svgElement2 = document.getElementById("svg-2");
const textElement2 = document.getElementById("text-2");

fileInput2.addEventListener("change", () => {
  const image = fileInput2.files[0];
  const reader = new FileReader();

  reader.onload = () => {
    const imgUrl = reader.result;
    const img = document.createElement("img");
    img.className = "w-full h-full bg-fit absolute z-20 overflow-hidden";
    img.src = imgUrl;
    imgArea2.appendChild(img);

    svgElement2.style.display = "none";
    textElement2.style.display = "none";
  };

  if (image && isImageFile(image)) {
    reader.readAsDataURL(image);
  }
});

function isImageFile(file) {
  const acceptedImageTypes = ["image/jpeg", "image/png", "image/gif"];
  return file && acceptedImageTypes.includes(file.type);
}
