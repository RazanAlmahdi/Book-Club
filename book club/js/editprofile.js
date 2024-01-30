window.onload = function() {
  var ID= document.forms["form"]["studentID"];
  var firstname = document.forms["form"]["firstName"];
  var lastname = document.forms["form"]["lastName"];
  var email = document.forms["form"]["email"];
  var password = document.getElementById("pass");
  var myForm = document.getElementById("form");


    ID.addEventListener('keyup', function(){
      ID.style.backgroundColor = "#FFFFFF";
      ID.style.borderColor = "black";
      if(ID.value == ""){
        ID.style.backgroundColor = "#F7BDBD";
        ID.style.borderColor = "#FC0303";
      }
    });

    password.addEventListener('keyup', function(){
      password.style.backgroundColor = "#FFFFFF";
      password.style.borderColor = "black";
      if(password.value.length == 0){
        password.style.backgroundColor = "#F7BDBD";
        password.style.borderColor = "#FC0303";
      }
    });

  firstname.addEventListener('keyup', function(){
    firstname.style.backgroundColor = "#FFFFFF";
    firstname.style.borderColor = "black";
    if(firstname.value == ""){
      firstname.style.backgroundColor = "#F7BDBD";
      firstname.style.borderColor = "#FC0303";
    }
  });

  lastname.addEventListener('keyup', function(){
    lastname.style.backgroundColor = "#FFFFFF";
    lastname.style.borderColor = "black";
    if(lastname.value == ""){
      lastname.style.backgroundColor = "#F7BDBD";
      lastname.style.borderColor = "#FC0303";
    }
  });

  email.addEventListener('keyup', function(){
    email.style.backgroundColor = "#FFFFFF";
    email.style.borderColor = "black";
    if(email.value == ""){
      email.style.backgroundColor = "#F7BDBD";
      email.style.borderColor = "#FC0303";
    }
  });

  myForm.onsubmit = function(e){


    if (ID.value == "") {
      ID.style.backgroundColor = "#F7BDBD";
        ID.style.borderColor = "#FC0303";
        e.preventDefault();
    }

    if (password.value.length == 0) {
      password.style.backgroundColor = "#F7BDBD";
      password.style.borderColor = "#FC0303";
      e.preventDefault();
    }
    if (firstname.value == "") {
        firstname.style.backgroundColor = "#F7BDBD";
        firstname.style.borderColor = "#FC0303";
        e.preventDefault();
    }
    if (lastname.value == "") {
        lastname.style.backgroundColor = "#F7BDBD";
        lastname.style.borderColor = "#FC0303";
        e.preventDefault();
    }
      if (email.value == "") {
        email.style.backgroundColor = "#F7BDBD";
        email.style.borderColor = "#FC0303";
        e.preventDefault();
    }
  }
  }
