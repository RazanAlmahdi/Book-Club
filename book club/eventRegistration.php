<?php
error_reporting(0);
session_start();
if(!(isset($_SESSION['SID'])) )
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
        <script src="js/eventRegistration.js"></script>
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
        <header>
            <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">
         <!-- form -->
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
				$result = mysqli_query($connection,$sql);


                $mysql = "Select * from events where eventDate>sysdate(3)";
				$myresult = mysqli_query($connection,$mysql);

				echo "<p><form method='post' action='registerEvent.php' id='form'>";
                echo "<h3> Register in Event </h3>";
                echo "<hr>";
                echo "<p><label>Event </label><br></p>";
                echo "<select name='eventID'>";
                echo "<option selected='' value=''>Choose Event</option>";
               
        ?>
                <?php 
                    // use a while loop to fetch data 
                    // from the $all_categories variable 
                    // and individually display as an option
                    while ($row = mysqli_fetch_array($myresult,MYSQLI_ASSOC)):; 
                ?>
                    <option value="<?php echo $row["eventID"];?>">
                    
                        <?php echo $row["eventTitle"];?>

                    </option>
                <?php 
                    endwhile; 
                    // While loop must be terminated
                ?>
            </select>
            <?php
                echo "<br><br>";
				echo "<p><input class='bttn' type='submit' value='Submit'>";
				echo "<input type = 'hidden' id='SID' name='SID' value = '".$SID."'>";
				echo "</form></p>";
            }
            else
            {
                echo "<h4>Please <a href='login.php'>login</a> or <a href='joinUs.php'>join us</a> first to see this page.</h4>";
            }
			error_reporting(0);
		?>
        </div>
        </header>
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
