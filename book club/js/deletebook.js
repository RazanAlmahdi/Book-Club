window.onload = function() {

  var title = document.forms["form"]["title"];
  var myForm = document.getElementById("form");


    title.addEventListener('keyup', function(){
      title.style.backgroundColor = "#FFFFFF";
      title.style.borderColor = "black";
      if(title.value == ""){
        title.style.backgroundColor = "#F7BDBD";
        title.style.borderColor = "#FC0303";
      }
    });

  myForm.onsubmit = function(e){
    if (title.value == "") {
      title.style.backgroundColor = "#F7BDBD";
      title.style.borderColor = "#FC0303";
      e.preventDefault();
    }
  }
  }
