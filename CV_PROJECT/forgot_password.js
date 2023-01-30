function formValidation(event) {
  // event.preventDefault();
  var ugmail = document.registration.uemail;

  if (!is_valid_email(ugmail)) {
    console.log("Invalid gmail");
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
