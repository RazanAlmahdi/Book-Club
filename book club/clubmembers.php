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
        <link href="css/clubmembers.css" rel="stylesheet" />
        <link href="css/contactUs.css" rel="stylesheet" />
          

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
                <div class="MyBtns">
                <?php
                if( !(isset($_SESSION['SID'])) && empty($_SESSION['SID']) )
                {
                echo "<div class='MyBtns'>";
                echo "<a class='MyBtns registerBtn' href='joinUs.php'>Join us</a>";
                echo "<a class='MyBtns loginBtn' href='login.php'>Log in</a></div>";
                }
                ?>
                </div>
            </div>
            </div>
        </header>
        <!-- Club Members-->
        <div class="text-center">
          <h1> Club Members </h1>
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
                    echo"<a class='viewMessage' href='viewMessages.php'>View Messages</a>";
                }

            }
            ?>
            <br><br>
        <div class="container">
        <?php
			$connection= mysqli_connect("localhost","root","","bookclub");
			$error= mysqli_connect_error();
			if ($error != null) {
			  echo "There is a problem ".$error;
			}
			$sql = "SELECT * from members";
			$result = mysqli_query($connection,$sql);
			if (mysqli_num_rows($result)==0) {
			  echo "There are no books in the database.";
			} else {
                echo "<ul class='menu'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li class='menuItem'> <a class='menuLink' href='#" .$row['SID']. "'> " .$row['firstName']. " </a></li>";
                }
                echo "</ul>";

            }

				?>
        <?php
              $connection= mysqli_connect("localhost","root","","bookclub");
              $error= mysqli_connect_error();
              if ($error != null) {
                echo "There is a problem ".$error;
              }
              $sql = "SELECT * from members";
              $result = mysqli_query($connection,$sql);
              if (mysqli_num_rows($result)==0) {
                echo "There are no members in the database.";
              } else {
                $row = mysqli_fetch_assoc($result);
                  echo "<div class='grid'>";
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='block'>";
                    echo "<p class='name' id='" .$row['SID']. "'>".$row['firstName']. " " .$row['lastName']."</p>";
                    if($row["accType"]=="admin")
                    {
                        echo"<h5 class='leader'> Club Leader </h5>";
                    }
                    echo "<p>".$row['major']."</p>";
                    echo "<p>".$row['year']."</p>";
                    echo "<p>".$row['interest']."</p>";
                    echo "<p>".$row['message']."</p>";
                    echo "</div>";
                  }
                  echo "</div>";
              }

          ?>
        <br><br></div>
        <?php include "contactus.php" ?>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="text-lg-start">Copyright &copy; Effat Book Club 2021</div>

                </div>
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
