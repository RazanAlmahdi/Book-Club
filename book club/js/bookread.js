window.onload = function() {
  var booktitle= document.forms["form"]["title"];
  var authorfirstname  = document.forms["form"]["afname"];
  var authorlastname = document.forms["form"]["alname"];
  var genre = document.forms["form"]["genre"];
  var quote = document.forms["form"]["quote"];
  var summary = document.forms["form"]["summary"];
  var reflection = document.forms["form"]["reflection"];
  var myForm = document.getElementById("form");


    booktitle.addEventListener('keyup', function(){
      booktitle.style.backgroundColor = "#FFFFFF";
      booktitle.style.borderColor = "black";
      if(booktitle.value == ""){
        booktitle.style.backgroundColor = "#F7BDBD";
        booktitle.style.borderColor = "#FC0303";
      }
    });

  authorfirstname.addEventListener('keyup', function(){
    authorfirstname.style.backgroundColor = "#FFFFFF";
    authorfirstname.style.borderColor = "black";
    if(authorfirstname.value == ""){
      authorfirstname.style.backgroundColor = "#F7BDBD";
      authorfirstname.style.borderColor = "#FC0303";
    }
  });

  authorlastname.addEventListener('keyup', function(){
    authorlastname.style.backgroundColor = "#FFFFFF";
    authorlastname.style.borderColor = "black";
    if(authorlastname.value == ""){
      authorlastname.style.backgroundColor = "#F7BDBD";
      authorlastname.style.borderColor = "#FC0303";
    }
  });

  genre.addEventListener('change', function(){
    genre.style.backgroundColor = "#FFFFFF";
    genre.style.borderColor = "black";
    if(genre.value == ""){
      genre.style.backgroundColor = "#F7BDBD";
      genre.style.borderColor = "#FC0303";
    }
  });

  quote.addEventListener('keyup', function(){
    quote.style.backgroundColor = "#FFFFFF";
    quote.style.borderColor = "black";
    if(quote.value == ""){
      quote.style.backgroundColor = "#F7BDBD";
    quote.style.borderColor = "#FC0303";
    }
  });

  summary.addEventListener('keyup', function(){
    summary.style.backgroundColor = "#FFFFFF";
    summary.style.borderColor = "black";
    if(summary.value == ""){
      summary.style.backgroundColor = "#F7BDBD";
        summary.style.borderColor = "#FC0303";
      }
  });

  reflection.addEventListener('keyup', function(){
    reflection.style.backgroundColor = "#FFFFFF";
    reflection.style.borderColor = "black";
    if(reflection.value == ""){
      reflection.style.backgroundColor = "#F7BDBD";
      reflection.style.borderColor = "#FC0303";
    }
  });

  myForm.onsubmit = function(e){


    if (booktitle.value == "") {
      booktitle.style.backgroundColor = "#F7BDBD";
      booktitle.style.borderColor = "#FC0303";
      e.preventDefault();
    }

    if (authorfirstname.value == "") {
        authorfirstname.style.backgroundColor = "#F7BDBD";
        authorfirstname.style.borderColor = "#FC0303";
        e.preventDefault();
    }

      if (authorlastname.value == "") {
        authorlastname.style.backgroundColor = "#F7BDBD";
        authorlastname.style.borderColor = "#FC0303";
        e.preventDefault();
    }

    if (quote.value == "") {
      quote.style.backgroundColor = "#F7BDBD";
      quote.style.borderColor = "#FC0303";
      e.preventDefault();
  }

  if (reflection.value == "") {
    reflection.style.backgroundColor = "#F7BDBD";
    reflection.style.borderColor = "#FC0303";
    e.preventDefault();
}

  if (genre.value == "") {
    genre.style.backgroundColor = "#F7BDBD";
    genre.style.borderColor = "#FC0303";
    e.preventDefault();
  }

  if (summary.value == "") {
    summary.style.backgroundColor = "#F7BDBD";
    summary.style.borderColor = "#FC0303";
    e.preventDefault();
  }
  
  }

  }
