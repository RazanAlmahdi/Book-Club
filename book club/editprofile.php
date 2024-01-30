<?php
session_start();
if(!isset($_SESSION["SID"]) )
	header("Location:index.php");
    error_reporting(0);
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
        <script src="js/editprofile.js"></script>
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
        <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">

        <!-- Content-->
        <div>

        <?php
                    $SID = $_SESSION['SID'];
					$connection = mysqli_connect("localhost","root","","bookclub");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);

                    

                    if(isset($_SESSION['SID']) )
                    {
 
                        $_SESSION['SID'] = $SID;
                        $currentSID = $_SESSION['SID'];
                        $sql = "Select * from members where SID = '".$currentSID."'";
						$result = mysqli_query($connection, $sql);
						$row = mysqli_fetch_assoc($result);

						echo "<form method='post' action='updateprofile.php' id='form'>";
                        if($row["accType"]="admin")
                        {	
                            echo "<br>";
                            echo "<p><label> ID: </label>";
                            echo "<input type='text' id='studentID' name='studentID' value ='".$row['SID']."'></p>";
                        }
                        echo "<br>";
						echo "<p><label> First Name: </label>";
						echo "<input type='text' id='firstName' name='firstName' value ='".$row['firstName']."'></p>";

                        echo "<br>";
						echo "<p><label> Last Name: </label>";
						echo "<input type='text' id='lastName' name='lastName' value ='".$row['lastName']."'></p>";

                        echo "<br>";
                        echo "<label> Major </label>";
                        echo "<select id='major' name='major'>";
                        echo "<option value=".$row['major']."> ".$row['major']."</option>";
                        echo "<option value='Computer Science'> Computer Science</option>";
                        echo "<option value='Electrical and Computer Engineering'> Electrical and Computer Engineering</option>";
                        echo "<option value='English and Translation'> English and Translation</option>";
                        echo "<option value='Psychology'> Psychology</option>";
                        echo "<option value='Finance'> Finance</option>";
                        echo "<option value='Human Resources Manegement'> Human Resources Manegement</option>";
                        echo "<option value='Supply Chain Manegement'> Supply Chain Manegement</option>";
                        echo "<option value='Entrepreneurship'> Entrepreneurship</option>";
                        echo "<option value='Architecture'> Architecture</option>";
                        echo "<option value='Cinematic Art'> Cinematic Arts</option>";
                        echo "<option value='Design'> Design</option></select>";
                        echo "<br>";

                        echo "<br>";
                        echo"<label> Year</label>";
                        echo "<select id='year' name='year'>";
                        echo "<option value=".$row['year']."> ".$row['year']."</option>";
                        echo "<option value='Freshman'>Freshman</option>";
                        echo "<option value='Sophomore'>Sophomore</option>";
                        echo "<option value='Junior'>Junior</option>";
                        echo "<option value='Senior'>Senior</option></select>";
                        echo "<br>";

                        echo "<br>";
                        echo"<label> Interest</label>";
                        echo "<select class='genre' name='genre'>";
                        echo "<option value=".$row['interest']."> ".$row['interest']."</option>";
                        echo "<option value='Fantasy'> Fantasy</option>";
                        echo "<option value='Science Fiction'> Science Fiction</option>";
                        echo "<option value='Adventure'> Adventure</option>";
                        echo "<option value='Romance'> Romance</option>";
                        echo "<option value='Detective&Mystery'> Detective&Mystery</option>";
                        echo "<option value='Horror'> Horror</option>";
                        echo "<option value='Thriller'> Thriller</option>";
                        echo "<option value='Historical Fiction'> Historical Fiction</option>";
                        echo "<option value='Memoir&Autobiography'> Memoir&Autobiography</option>";
                        echo "<option value='Biography'> Biography</option>";
                        echo "<option value='Self-Help/Personal Development'> Self-Help/Personal Development</option>";
                        echo "<option value='History'> History</option>";
                        echo "<option value='Law&Criminology'> Law&Criminology</option>";
                        echo "<option value='Politics&Social Sciences'> Politics&Social Sciences</option>";
                        echo "<option value='Religion&Spirituality'> Religion&Spirituality</option>";
                        echo "<option value='Travel'> Travel</option>";
                        echo "<option value='Humor&Entertainment'> Humor&Entertainment</option>";
                        echo "<option value='Art&Photography'> Art&Photography</option>";
                        echo "<option value='Literary Fiction'>Literary Fiction</option>";
                        echo "<option value='Western'>Western</option>";
                        echo "<option value='Magical Realism'>Magical Realism</option>";
                        echo "<option value='Realist Literature'>Realist Literature</option></select>";
                        echo "<br>";

                        echo "<br>";
						echo "<p><label> Email: </label>";
						echo "<input type='email' id='email' name='email' value ='".$row['email']."'></p>";

                        echo "<br>";
						echo "<p><label> Password: </label>";
						echo "<input type='password' id='pass' name='pass' value ='".$row['pass']."'></p>";

                        echo "<br>";
						echo "<input type='Submit' name ='Submit' value='Submit'>";
						echo "<a href='profile.php'> Cancel</a>";
                        
						echo "<br>";

						echo "<input type = 'hidden' id='SID' name='SID' value = '".$SID."'>";
						
						echo "</form>";
                        
                    }
                    else
                    {
                        echo "<h4>Please <a href='login.php'>login</a> or <a href='joinUs.php'>join us</a> first to see this page.</h4>";
                    }
					error_reporting(0);
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