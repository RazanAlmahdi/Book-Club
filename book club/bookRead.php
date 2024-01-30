<?php
session_start();
if(!isset($_SESSION["SID"]))
	header("Location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="js/bookread.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/ourstyle.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include "menu.php" ?>
        <!-- Masthead-->
        <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">
        <!-- form -->
        <form class="form" action= "addbook.php" method="post" id="form">
			<fieldset>
				<legend> Book Read </legend>
				<label> Title </label> <br>
				<input class="input" type="text" id="title" name="title">
			<br><br>
                <label> Author </label> <br>
				<input class="name" type="text" id="afname" name="afname" placeholder="First Name">
				<input class="name" type="text" id="alname" name="alname" placeholder="Last Name">
			<br><br>
            <label>Genre </label> <br>
            <select class="input" id="genre" name="genre">
                <option value="">--select a genre-- </option>
                <option value="Literary/Fiction">Literary/Fiction</option>
                <option value="Detective/Mystery">Detective/Mystery</option>
                <option value="Thriller">Thriller</option>
                <option value="Horror">Horror</option>
                <option value="Historical/Fiction">Historical Fiction</option>
                <option value="Romance">Romance</option>
                <option value="Western">Western</option>
                <option value="Science/Fiction">Science Fiction</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Magical/Realism">Magical Realism</option>
                <option value="Realist/Literature">Realist/Literature</option>
                <option value="Adventure"> Adventure</option>
                <option value="Memoir/Autobiography"> Memoir/Autobiography</option>
                <option value="Biography"> Biography</option>
                <option value="Self-Help/Personal Development/Pschology"> Self-Help/Personal Development/Pschology</option>
                <option value="History"> History</option>
                <option value="Law/Criminology"> Law&Criminology</option>
                <option value="Politics/SocialSciences"> Politics/Social Sciences</option>
                <option value="Religion/Spirituality"> Religion/Spirituality</option>
                <option value="Travel"> Travel</option>
                <option value="Humor/Entertainment"> Humor/Entertainment</option>
                <option value="Art/Photography"> Art/Photography</option>
            </select>
            <br><br>
                <label> Summary </label> <br>
                <input class="textarea" type="textarea" id="summary" name="summary">
			<br><br>
                <label> Reflection </label> <br>
                <input class="textarea" type="textarea" id="reflection" name="reflection">
			<br><br>
                <label> Quote </label> <br>
                <input class="textarea" type="textarea" id="quote" name="quote">
			<br><br>
				<input class="button first" type="submit" value="Submit">
				<input class="button second"type="reset" value="Clear">
			</fieldset>
			</form>
</div>
<br><br>
        <div class=" my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
        <br>
        <?php include "contactus.php" ?>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-lg-start">Copyright &copy; Effat Book Club 2021</div>

                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
