function formValidation(event) {
  // event.preventDefault();
  var ufname = document.registration.ufirstname;
  var ulname = document.registration.ulastname;
  var uuname = document.registration.uusername;
  var ugmail = document.registration.uemail;
  var usex = document.registration.ugender;
  var upass = document.registration.upas;
  var uconpass = document.registration.uconfirmpass;

  if (!is_valid_firstname(ufname)) {
    console.log("Invalid firstname");
    event.preventDefault();
    return;
  }
  if (!is_valid_lastname(ulname)) {
    console.log("Invalid lastname");
    event.preventDefault();
    return;
  }
  if (!is_valid_username(uuname)) {
    console.log("Invalid username");
    event.preventDefault();
    return;
  }
  if (!is_valid_email(ugmail)) {
    console.log("Invalid gmail");
    event.preventDefault();
    return;
  }
  if (!is_valid_gender(usex)) {
    console.log("Invalid gender");
    event.preventDefault();
    return;
  }

  if (!upas_validation(upass)) {
    console.log("Invalid password");
    event.preventDefault();
    return;
  }
  if (!match_password(uconpass)) {
    console.log("Invalid confirm_password");
    event.preventDefault();
    return;
  }
  console.log(
    ufname.value,
    ulname.value,
    uuname.value,
    ugmail.value,
    usex.value,
    upass.value,
    uconpass.value
  );
}

function is_valid_firstname(ufname) {
  var letters = /^[A-Za-z]+$/;
  if (ufname.value.match(letters)) {
    return true;
  } else {
    alert("Firstname must have alphabet characters only");
    ufname.focus();
    return false;
  }
}
function is_valid_lastname(ulname) {
  var letters = /^[A-Za-z]+$/;
  if (ulname.value.match(letters)) {
    return true;
  } else {
    alert("Lastname must have alphabet characters only");
    ulname.focus();
    return false;
  }
}
function is_valid_username(uuname) {
  var letters = /^[A-Za-z0-9]+$/;
  if (uuname.value.match(letters)) {
    return true;
  } else {
    alert("Username must be alphanumeric characters only");
    uuname.focus();
    return false;
  }
}
function is_valid_email(ugmail) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (ugmail.value.match(mailformat)) {
    return true;
  } else {
    alert(
      "You have entered an invalid email address!(please provide format `abc@gmail.com`)"
    );
    ugmail.focus();
    return false;
  }
}
function is_valid_gender(usex) {
  if (
    usex.value === "male" ||
    usex.value === "female" ||
    usex.value === "others"
  ) {
    return true;
  } else {
    return false;
  }
}
function upas_validation(upass) {
  var pass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
  if (upass.value.match(pass)) {
    return true;
  } else {
    alert(
      "Wrong password(Please Enter 1 digit,1 capital letter, 1 small letter,1 special character)!"
    );
    return false;
  }
}
function match_password(uconpass) {
  var pass1 = document.getElementById("upass");
  var pass2 = document.getElementById("uconpass");
  if (pass1 != pass2) {
    alert("Password did not match");
    return false;
  } else {
    // window.location.reload();
    return true;
  }
}
