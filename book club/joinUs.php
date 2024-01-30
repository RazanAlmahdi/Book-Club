<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <script src="js/myScript.js"></script>
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
        <!-- form -->
        <form class="form" action="addMember.php" method="post" id="form">
          <fieldset>
            <legend> Join Us</legend>
            <label> Your Name </label> <br>
            <input  type="text" name="fname" class="name" class="fname" placeholder="First Name">
            <input type="text" name="lname" class="name" class="lname" placeholder="Last Name">
            <br></br>
            <label> Email </label> <br>
            <input class="input" type="email" name="email" id="email" placeholder="example@exmaple">
            <br></br>
            <label> ID </label><br>
            <input class="input" type="text" name="sID" id="sID" placeholder="S20104400">
            <br></br>
            <label> Password </label> <br>
            <input class="input" type="password" name="pass" id="pass">
            <br></br>
            <label> Confirm Password </label> <br>
            <input class="input" type="password" name="pass" id="Confirmpass">
            <br></br>
            <label> Major </label> <br>
            <select class="input" id="major" name="major">
                <option selected="" value=""> choose your major</option>
                <option value="ComputerScience"> Computer Science</option>
                <option value="ElectricalandComputerEngineering"> Electrical and Computer Engineering</option>
                <option value="EnglishandTranslation"> English and Translation</option>
                <option value="Psychology"> Psychology</option>
                <option value="Finance"> Finance</option>
                <option value="HumanResourcesManegement"> Human Resources Manegement</option>
                <option value="SupplyChainManegement"> Supply Chain Manegement</option>
                <option value="Entrepreneurship"> Entrepreneurship</option>
                <option value="Architecture"> Architecture</option>
                <option value="Cinematic Art"> Cinematic Arts</option>
                <option value="Design"> Design</option>
            </select>
            <br></br>
            <label> Year</label> <br>
            <select class="input" id="year" name="year">
            <option selected="" value=""> choose your year</option>
                <option value="Freshman">Freshman</option>
                <option value="Sophomore">Sophomore</option>
                <option value="Junior">Junior</option>
                <option value="Senior">Senior</option>
            </select>
            <br></br>
            <label> Interest</label> <br>
            <select class="input" class="genre" name="genre">
            <option selected="" value="">--select a genre--</option>
                <option value="Fantasy"> Fantasy</option>
                <option value="Science/Fiction"> Science Fiction</option>
                <option value="Adventure"> Adventure</option>
                <option value="Romance"> Romance</option>
                <option value="Detective/Mystery"> Detective&Mystery</option>
                <option value="Horror"> Horror</option>
                <option value="Thriller"> Thriller</option>
                <option value="Historical/Fiction"> Historical Fiction</option>
                <option value="Memoir&Autobiography"> Memoir&Autobiography</option>
                <option value="Biography<y"> Biography</option>
                <option value="Self-Help/Personal Development"> Self-Help/Personal Development</option>
                <option value="History"> History</option>
                <option value="Law/Criminology"> Law&Criminology</option>
                <option value="Politics/SocialSciences"> Politics&Social Sciences</option>
                <option value="Religion/Spirituality"> Religion&Spirituality</option>
                <option value="Travel"> Travel</option>
                <option value="Humor/Entertainment"> Humor&Entertainment</option>
                <option value="Art/Photography"> Art&Photography</option>
                <option value="Literary/Fiction">Literary Fiction</option>
                <option value="Western<">Western</option>
                <option value="Magical/Realism">Magical Realism</option>
                <option value="Realist/Literature">Realist Literature</option>
            </select>
            <br></br>
            <label> Leave a message </label> <br>
            <input class="textarea" type="textarea" name="message" class="message" placeholder="State the reason for joining the club. Leave a welcome message. ">
            <br></br>
            <input class="button first" type="submit" name="submit" value="submit">
            <input class="button second" type="reset" name="submit" value="reset">
          </fieldset>
        </form>
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
