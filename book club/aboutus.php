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

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">A brief informative rundown of our club.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/book1.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Foundation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Our club has been founded in the year of 2019 by the efforts of Dr. Ayman Eddakrouri, and a group of Effaties with a passion for books. It started out as a small gathering of book lovers, and over time, it grew to accomodate more and more!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/book2.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Vision</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">We believe that books are true friends to the reader. Each book is a journey and a lifetime, holding important lessons between its pages, or simply a companion that helps you pass along the time. The passion of reading should never be neglected or forgotten,
                              and so our purpose is to provide a safe, stress-free zone to express our love for books, and our thoughts about them.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/book3.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Meetings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Meetings are an important part of our club. Once every two weeks, the members gather in the designated meeting
                              spot in the library to discuss the book of choice. In each meeting, we reflect over the general concept of the book, its history, and our opinions and insight on it. Towards the end of the meeting, the members elect a new book to be the subject of their upcoming session.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/book4.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Qualification</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Our club does not require any special conditions by any means. No matter what faculty you come from, what language you read in, or what genres you prefer, we make sure to always keep it diverse!</p></div>
                        </div>
                    </li>
                    <?php
                if( !(isset($_SESSION['SID'])) && empty($_SESSION['SID']) )
                {
                    echo"<li class=timeline-inverted'><div class='timeline-image'><h4> <a class='bePart' href='joinUs.php'>Be Part<br>Of Our<br>Family! </a></h4></div></li>";
                }
                ?>
                    
                </ul>
            </div>
        </section>

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
