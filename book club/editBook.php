<?php
error_reporting(0);
session_start();
if (!(isset($_SESSION['SID'])))
    header("Location:index.php");
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Effat Book Club</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="js/editbook.js"></script>
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

        <!-- Content-->
        <h3>Edit Book</h3>
        <form method="post" action="" id="form1">
            <p><label>Select Book </label><br>
            <select id="bookID" name="bookID">

            <?php
                $connection = mysqli_connect("localhost","root","","bookclub");
                $error = mysqli_connect_error();
                if($error != null)
                echo("There is a problem".$error);
                
                $mysql = "Select bookID, bookTitle from books";
                $myresult = mysqli_query($connection,$mysql);

                while( $row = mysqli_fetch_array($myresult) )
                {
                    echo" <p><option value =".$row['bookID'].">".$row['bookTitle']."</option></p>";
                }
            ?>
        <input class="bttn" type="submit" value="Edit Book">
            </form>
        <?php

            $connection = mysqli_connect("localhost","root","","bookclub");
            $error = mysqli_connect_error();
            if($error != null)
                echo("There is a problem".$error);
            if(isset($_POST['bookID']) ){
                $bookID = $_POST['bookID'];

                $sql = "SELECT * from books where bookID = '".$bookID."'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);

                echo "<form class='form' action= 'updateBook.php' method='post' id='form'>";
			    echo "<fieldset>";
				echo "<legend> Book Read </legend>";
				echo "<p><label> Title </label> <br>";
				echo "<input class='input' type='text' id='title' name='title' value ='".$row['bookTitle']."'></p>";
			    echo "<br><br>";
                echo "<p><label> Author </label> <br>";
				echo "<input class='name' type='text' id='afname' name='afname' placeholder='First Name' value ='".$row['authorFirstName']."'>";
				echo "<input class='name' type='text' id='alname' name='alname' placeholder='Last Name' value ='".$row['authorLastName']."'></p>";
			    echo "<br><br>";
                echo "<p><label>Genre </label> <br>";
                echo "<select class='input' id='genre' name='genre'>";
                echo "<option value=".$row['genre']."> ".$row['genre']."</option></p>";
                echo "<option value='Literary/Fiction'>Literary/Fiction</option>";
                echo "<option value='Detective/Mystery'>Detective/Mystery</option>";
                echo "<option value='Thriller'>Thriller</option>";
                echo "<option value='Horror'>Horror</option>";
                echo "<option value='Historical/Fiction'>Historical Fiction</option>";
                echo "<option value='Romance'>Romance</option>";
                echo "<option value='Western'>Western</option>";
                echo "<option value='Science/Fiction'>Science Fiction</option>";
                echo "<option value='Fantasy'>Fantasy</option>";
                echo "<option value='Magical/Realism'>Magical Realism</option>";
                echo "<option value='Realist/Literature'>Realist/Literature</option>";
                echo "<option value='Adventure'> Adventure</option>";
                echo "<option value='Memoir/Autobiography'> Memoir/Autobiography</option>";
                echo "<option value='Biography'> Biography</option>";
                echo "<option value='Self-Help/Personal Development/Pschology'> Self-Help/Personal Development/Pschology</option>";
                echo "<option value='History'> History</option>";
                echo "<option value='Law/Criminology'> Law&Criminology</option>";
                echo "<option value='Politics/SocialSciences'> Politics/Social Sciences</option>";
                echo "<option value='Religion/Spirituality'> Religion/Spirituality</option>";
                echo "<option value='Travel'> Travel</option>";
                echo "<option value='Humor/Entertainment'> Humor/Entertainment</option>";
                echo "<option value='Art/Photography'> Art/Photography</option>";
            echo "</select>";
            echo "<br><br>";
                echo "<p><label> Summary </label> <br>";
                echo "<input class='textarea' type='textarea' id='summary' name='summary' value ='".$row['summary']."'></p>";
			echo "<br><br>";
                echo "<p><label> Reflection </label> <br>";
                echo "<input class='textarea' type='textarea' id='reflection' name='reflection' value ='".$row['reflection']."'></p>";
			echo "<br><br>";
                echo "<p><label> Quote </label> <br>";
                echo "<input class='textarea' type='textarea' id='quote' name='quote' value ='".$row['quote']."'></p>";
			echo "<br><br>";
				echo "<input class='button first' type='submit' value='Edit'>";
				echo "<a  class='button second' href='booklist.php'> Cancel</a>";
            	echo "<input type = 'hidden' id='bookID' name='bookID' value = '".$bookID."'>";
			echo "</fieldset>";
			echo "</form>";
            }
                ?>

        </div>


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
