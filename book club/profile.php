<?php
session_start();
if(!isset($_SESSION["SID"]) )
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
            <div class="container">

        <!-- Content-->
        <div>
            <?php
                $connection = mysqli_connect("localhost","root","","bookclub");

                $error = mysqli_connect_error();
                if($error != null)
                    echo("There is a problem".$error);
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";
                $result = mysqli_query($connection,$sql);

                $row = mysqli_fetch_assoc($result);

                echo "<div class='card'>";
                echo "<img src='images/profile.png' alt='profile' width='100%' height='200em'>";
                echo "<h2>".$row['firstName']." ".$row['lastName']."</h2>";
                echo "<p>Email: ".$row['email']."</p>";
                echo "<p class='title'>Major: ".$row['major']."</p>";
                echo "<p>Year: ".$row['year']."</p>";
                echo "<p>Interest: ".$row['interest']."</p>";
                echo "<a href='editprofile.php'><p><button>Edit Profile</button></p></a></div>";
                echo "<br>";
                echo "<div class='profilebtns'><div class='MyBtns'><a href='logout.php'><p class='MyBtns loginBtn'>Logout</p></a></div>";
                ?>
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

                    if($row["accType"]!="admin")
                    {
                        echo "<div class='MyBtns'><a href='deleteMember.php'><p class='MyBtns registerBtn'>Delete Account</p></a></div></div>";
                    }

                }
                ?>
        </div>
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
