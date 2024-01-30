<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["eventID"]) )
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
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <?php include "menu.php" ?>

        <!-- Masthead-->
        <header class="masthead">
            <img src="images/club.jpg" alt="Club logo" width="100%" height="53rem">
            <div class ="mastheadLayer">
            <div class="container">
                <div class="masthead-subheading">Welcome To Effat Book Club!</div>
                <div class="masthead-heading text-uppercase">Read To Raise</div>
            </div>
            </div>
        </header>

        <!-- Content-->
        <div>
          <h3>Book List</h3>
          <?php
              $connection= mysqli_connect("localhost","root","","bookclub");
              $error= mysqli_connect_error();
              if ($error != null) {
                echo "There is a problem ".$error;
              }
              $bookID = $_POST['bookID'];
              $title= $_POST['title'];
              $authorFN= $_POST['afname'];
              $authorLN= $_POST['alname'];
              $genre= $_POST['genre'];
              $summary= $_POST['summary'];
              $reflection= $_POST['reflection'];
              $quote= $_POST['quote'];

              $sql= "insert into books (bookID, bookTitle,authorFirstName,authorLastName,genre,quote,summary,reflection) values ('".$bookID."','".$title."', '".$authorFN."', '".$authorLN."', '".$genre."', '".$quote."', '".$summary."', '".$reflection."')";
              
              if( mysqli_query($connection,$sql) )
    					{
    						echo "<h4> The data has been saved. Thank you! </h4>";
    					}
    					else
    					{
    						echo "<h4> We could not save the data. Try again later! </h4>";
    					}

          ?>
        </div>


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
