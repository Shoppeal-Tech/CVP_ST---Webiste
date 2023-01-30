function formValidation(event) {
  // event.preventDefault();
  var uuname = document.signin.uusername;
  var upass = document.signin.upas;

  if (!is_valid_username(uuname)) {
    console.log("Invalid username");
    event.preventDefault();
    return;
  }
  if (!upas_validation(upass)) {
    console.log("Invalid password");
    event.preventDefault();
    return;
  }
  console.log(uuname.value, upass.value);
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
function upas_validation(upass) {
  var pass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;
  if (upass.value.match(pass)) {
    // window.location.reload();
    return true;
  } else {
    alert(
      "Wrong password(Please Enter 1 digit,1 capital letter, 1 small letter,1 special character)!"
    );
    return false;
  }
}
