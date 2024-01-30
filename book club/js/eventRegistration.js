window.onload = function() {

  var register = document.forms["form"]["eventID"];
  var myForm = document.getElementById("form");
  
  register.addEventListener('change', function(){
    register.style.backgroundColor = "#FFFFFF";
    register.style.borderColor = "black";
    if(register.value == ''){
      register.style.backgroundColor = "#F7BDBD";
      register.style.borderColor = "#FC0303";
    }
  });
  
  myForm.onsubmit = function(e){
    
    if (register.value == '') {
      register.style.backgroundColor = "#F7BDBD";
      register.style.borderColor = "#FC0303";
      e.preventDefault();
    }  
  }

  }

