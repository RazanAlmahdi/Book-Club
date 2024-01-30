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
          <link href="css/booklist.css" rel="stylesheet" />
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
          <br>
          <div class="container">
          <?php
			$connection= mysqli_connect("localhost","root","","bookclub");
			$error= mysqli_connect_error();
			if ($error != null) {
			  echo "There is a problem ".$error;
			}
			$sql = "SELECT * from books";
			$result = mysqli_query($connection,$sql);
			if (mysqli_num_rows($result)==0) {
			  echo "There are no books in the database.";
			} else {
                echo "<ul class='menu'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li class='menuItem'> <a class='menuLink' href='#" .$row['bookID']. "'> " .$row['bookID']. " </a></li>";
                }
                echo "</ul>";

            }

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
                echo"<a class='editBook' href='editBook.php'>Edit Book</a>";
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."'";

                $result=mysqli_query($data,$sql);

                $row=mysqli_fetch_array($result);

                if($row["accType"]=="admin")
                {
                    echo"<a class='deleteBook' href='deleteBook.php'>Delete Book</a>";
                }

}
?>
          <?php
              $connection= mysqli_connect("localhost","root","","bookclub");
              $error= mysqli_connect_error();
              if ($error != null) {
                echo "There is a problem ".$error;
              }
              $sql = "SELECT * from books";
              $result = mysqli_query($connection,$sql);
              if (mysqli_num_rows($result)==0) {
                echo "There are no books in the database.";
              } else {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='block' id='block'>";
                    echo "<h4 class='title' id='" .$row['bookID']. "'>".$row['bookID']. ".".$row['bookTitle']."</h4>";
                    echo "<br>";
                    echo "<p class='info'>".$row['genre']."</p>";
                    echo "<p class='info'>".$row['authorFirstName']." ".$row['authorLastName']."</p>";
                    echo "<em>".$row['quote']."</em>";
                    echo "<br><br>";
                    echo "<p class='summary'>".$row['summary']."</p>";
                    echo "<p>".$row['reflection']."</p>";
                    echo "<br><br>";
                    echo "</div>";
                  }
                 
            }

          ?>
        </div>
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
