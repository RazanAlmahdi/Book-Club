<?php
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
        <header>
            <img src="images/background.png" alt="Club logo" width="100%">
            <div class="container">
         <!-- form -->
                 <?php
					$connection = mysqli_connect("localhost","root","","bookclub");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);
					
					$sql = "SELECT members.SID, members.firstName, members.lastName, members.email, members.major, members.year, members.interest, events.eventTitle, events.eventDesc, events.eventDate, events.location, events.startTime, events.endTime, events.vps FROM eventattendance, events, members WHERE events.eventID = eventattendance.eventID AND eventattendance.SID = members.SID";
                    
                    $result = mysqli_query($connection,$sql);
					
					echo "<table class='table table-striped'>";
					echo "<tr> <th> Student ID </th> <th> Student First Name </th> <th> Student Last Name </th><th> Student Email </th> <th> Student Major </th><th> Student Year </th> <th> Student Interest </th> <th> Event Title </th> <th> Event Descreption </th><th> Event Date</th><th>Event Location</th><th>Event Start Time </th><th>Event End Time</th><th>VPs</th>";
					if(mysqli_num_rows($result) == 0)
					{
						echo "<tr> <td colspan=4> There are no events recorded! </td> </tr>";
					}
					else{
						
						while( $row = mysqli_fetch_assoc($result) )
						{
							echo "<tr>";
							echo "<td>".$row['SID']."</td>";
							echo "<td>".$row['firstName']."</td>";
							echo "<td>".$row['lastName']."</td>";
							echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['major']."</td>";
							echo "<td>".$row['year']."</td>";
							echo "<td>".$row['interest']."</td>";
							echo "<td>".$row['eventTitle']."</td>";
                            echo "<td>".$row['eventDesc']."</td>";
                            echo "<td>".$row['eventDate']."</td>";
							echo "<td>".$row['location']."</td>";
							echo "<td>".$row['startTime']."</td>";
                            echo "<td>".$row['endTime']."</td>";
							echo "<td>".$row['vps']."</td>";
							echo "</tr>";
							
						}
					}//end else
					echo "</table>";
					
				 
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
