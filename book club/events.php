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
        <link href="css/ourstyle.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
            <?php include "menu.php" ?>

        <!-- Masthead-->
        <header class="masthead">
            <img src="images/events.jpg" alt="" width="100%" height="53rem">
            <div class ="mastheadLayer">
            <div class="container">
                <div class="masthead-subheading">Welcome To Effat Book Club!</div>
                <div class="masthead-heading text-uppercase">Check out our events!</div>
            </div>
            </div>
        </header>

        <!-- Content-->
        <div>
            <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Events</h2>
                </div>
                <?php

                $host="localhost";
                $user="root";
                $password="";
                $db="bookclub";

                session_start();


                $data=mysqli_connect($host,$user,$password,$db);

                if($data===false)
                {
                    die("connection error");
                }

                if (isset($_SESSION['SID']))
                {
                    $SID = $_SESSION['SID'];
                    $sql = "select * from members where SID = '".$SID."'";

                    $result=mysqli_query($data,$sql);

                    $row=mysqli_fetch_array($result);

                    if($row["accType"]=="admin")
                    {
                        echo"<a class='manageEvent' href='manageEvents.php'>Manage Events</a>";
                    }

                }
                ?>
                <?php
                    $connection = mysqli_connect("localhost","root","","bookclub");
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);
					
					$sql = "SELECT * from events";
                    
                    $result = mysqli_query($connection,$sql);
					
					echo "";
					echo "";
					if(mysqli_num_rows($result) == 0)
					{
						echo "<h4>There are no events recorded!</h4>";
					}
					else
                    {
                        echo "<div class='grid'>";
						while( $row = mysqli_fetch_assoc($result) )
						{
                            $date = date('Y-m-d');
                                echo "<div>";

                                            echo "<img class='img-fluid' src='images/".$row['image']."' >";
                                            echo"<h3 class='eventInfo'>" .$row['eventTitle']. "</h3>";
                                            echo "<p class='eventInfo'>" .$row['eventDesc']. "</p>";
                                            echo"<p class='eventInfo'>" .$row['startTime']." - ".$row['endTime']."</p>";
                                            echo"<p class='eventInfo'>".$row['eventDate']."</p>";
                                            echo"<p class='eventInfo'>(".$row['vps'].")</p>";
                                            if ( $date < $row['eventDate'])
                                                echo"<p class='eventInfo'><a class='link' href='eventRegistration.php'>Register Now!</a></p>";
                                            else
                                                echo"<p class='eventInfo'>This event ended.</p>";
                                echo"</div>";
                        }
                        echo "</div>";
                    }
                ?>
                    
            </div>
                
            </div>

        </section>
        </div>

        </div>

        <br>
        <div class= "my-3 my-lg-0">
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
