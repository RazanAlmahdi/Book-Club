<?php
error_reporting(0);
session_start();
if (isset($_SESSION['SID']))
            {
                $host="localhost";
                $user="root";
                $password="";
                $db="bookclub";
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";
                $data=mysqli_connect($host,$user,$password,$db);
                $result=mysqli_query($data,$sql);

                $row=mysqli_fetch_array($result);

                if($row["accType"]!="admin")
                    header("Location:index.php");

            }
        else
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
        <script src="js/editevent.js" crossorigin="anonymous"></script>
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
        <div>
        <?php

            $connection = mysqli_connect("localhost","root","","bookclub");
            $error = mysqli_connect_error();
            if($error != null)
                echo("There is a problem".$error);

            if(isset($_POST['Submit']) )
            {
                $eventID = $_POST['eventID'];
                $_SESSION['eventID'] = $eventID;
                $currentEventID = $_SESSION['eventID'];

                $sql = "Select * from events where eventID = '".$currentEventID."'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);

                echo "<form class='form' method='post' action='updateEvent.php' id='form'>";
				echo "<fieldset>";
				echo "<legend>Edit Event</legend>";
                echo "<br>";
				echo "<p><label> Event Title: </label><br>";
				echo "<input class='input' type='text' id='eventTitle' name='eventTitle' value ='".$row['eventTitle']."'></p>";
                echo "<br>";
				echo "<p><label> Event Description: </label><br>";
				echo "<input class='input' type='text' id='eventDesc' name='eventDesc' value ='".$row['eventDesc']."'></p>";
                echo "<br>";
				echo "<p><label> Event Date: </label><br>";
				echo "<input class='input' type='date' id='eventDate' name='eventDate' value ='".$row['eventDate']."'></p>";
                echo "<br>";
				echo "<p><label> Start Time: </label>";
				echo "<input class='input2' type='time' id='startTime' name='startTime' value ='".$row['startTime']."'>";

				echo "<label> End Time: </label>";
				echo "<input class='input2' type='time' id='endTime' name='endTime' value ='".$row['endTime']."'></p>";
                echo "<br>";
				echo "<p><label> Location: </label><br>";
				echo "<input class='input' type='text' id='location' name='location' value ='".$row['location']."'></p>";
                echo "<br>";
				echo "<p><label> Value Points: </label><br>";
				echo "<input class='input' type='text' id='vps' name='vps' value ='".$row['vps']."'></p>";
                echo "<br>";
                echo "<label> Event Picture </label><br>";
                echo "<input type='file' name='image' id='images' value = '".$row['image']."'>";
                echo "<br><br>";
                echo "<input  class='button first' type='Submit' name ='Submit' value='Submit'>";
                echo "<a  class='button second' href='manageEvents.php'> Cancel</a>";
                echo "<br>";
                echo "<a class='linkk' href='deleteEvent.php'>Delete Event</a></div>";
				echo "<br>";
				echo "<input type = 'hidden' id='SID' name='SID' value = '".$eventID."'>";
                echo "<br>";
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
