<?php
if(!isset($_SESSION))
{
    session_start();
}
error_reporting(0);
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" class="ournav"id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="images\logo.jpg" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="clubmembers.php">Club Members</a></li>
                <li class="nav-item"><a class="nav-link" href="booklist.php">Books List</a></li>

                <?php
                /*$connection = mysqli_connect("localhost","root","","bookclub");
                $SID = $_SESSION['SID'];
                $sql = "select * from members where SID = '".$SID."' and pass= '".$pass."'";
                $result = mysqli_query($connection,$sql);
                //$row = mysqli_fetch_assoc($result);
                $accType=$row["accType"];*/
                if( isset($_SESSION['SID']) && !empty($_SESSION['SID']) )
                {
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'bookread.php'>Book Read</a></li>";

                    //if($accType=='admin')
                        //echo "<li class='nav-item'><a class= 'nav-link' href= 'manageEvents.php'>Manage Events</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'profile.php'>Profile</a></li>";
                    echo "<li class='nav-item'><a class= 'nav-link' href= 'logout.php'>Logout</a></li>";
                }
                ?>



            </ul>
        </div>
    </div>
</nav>
