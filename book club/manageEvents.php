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

        <!-- Content-->
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Manage Events</h2>
        </div>
        <section class="eventpage-section bg-light" id="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- item 1 -->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                            <a class="link" href="viewEvents.php"><img class="eventicons" src="images/view.png" alt="..."></a>
                                <a class="link" href="viewEvents.php"><p>Viwe Events Regitration</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- item 2 -->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                            <img class="eventicons" src="images/edit.png" alt="...">
                                <p><form method="post" action="editEvent.php">
                                <p><label>Select Event to Edit</label><br>
                                <select name="eventID">
                                    <?php
                                        $connection = mysqli_connect("localhost","root","","bookclub");
                                        $error = mysqli_connect_error();
                                        if($error != null)
                                        echo("There is a problem".$error);
                                        
                                        $mysql = "Select eventID, eventTitle from events";
                                        $myresult = mysqli_query($connection,$mysql);

                                        while( $row = mysqli_fetch_array($myresult) )
                                        {
                                            echo" <option value =".$row['eventID'].">".$row['eventTitle']."</option>";
                                        }
                                    ?>
                                </select>
                                <input class="bttn" type="Submit" name="Submit" value="Submit" />

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- item 3 -->
                        <div class="portfolio-item">
                            <div class="portfolio-caption">
                            <a class="link" href="newEvent.php"><img class="eventicons" src="images/add.png" alt="..."></a>
                                <br>
                                <a class="link" href="newEvent.php"> Add New Event</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

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
