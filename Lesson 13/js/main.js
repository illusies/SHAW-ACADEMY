var modal = document.querySelector('.modal');
modal.style.display="none";

var loginForm = document.querySelector("#login-form");

loginForm.addEventListener("submit", function(e){
  e.preventDefault();
})

function validateLogin(){
  var unameField = document.querySelector("#uname");
  var pwdField = document.querySelector("#pwd");

  if(uname.value != "Admin" || pwdField.value != "123456"){
    modal.style.display = "block"
  }
  else if (uname.value == "Admin" || pwdField.value == "123456"){
    alert("You are now logged in!");
    window.location.href = "index.html";
  }
}
