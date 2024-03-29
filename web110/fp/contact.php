<!DOCTYPE html>
<html lang="en">

<head>
    <title>Destination Weird</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/dest_weird.css" />
    <link rel="stylesheet" href="css/dest_weird_nav.css" />
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
    <header class="home">

        <a class="logo" href="index.html"><img src="images/destination-weird.jpg" alt="destinaton weird temporary logo"></a>
    </header>

    <nav class="nav">
        <!-- Animated 3D Flipping Menu with CSS - http://davidwalsh.name/3d-menu - by David Walsh -->
        <ul class="block-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="galleries.html">Galleries</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="member.html">Members</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <h1 class="logo">Contact Destination Weird</h1>
    <main class="wrapper">

        <div class="form_container">
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "thomas.ti.hall@gmail.com";  //place your/your client's email address here
        $toName = "Destination Weird"; //place your client's name here
        $website = "Destination Weird";  //place NAME of your client's website

//        echo loadContact('simple.php');#demonstrates a simple contact form
            
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </div>


        <section class="links">

            <h6>image navigation links</h6>

            <figure>
                <a href="projects.html"><img src="images/old-calendar_330x205.jpg" alt="old calendar"></a>
                <figcaption>Upcoming Projects</figcaption>
            </figure>

            <figure>
                <a href="film.html"><img src="images/film-reel_330x206.jpg" alt="old film roll"></a>
                <figcaption>Film Gallery</figcaption>
            </figure>

            <figure>
                <a href="stage.html"><img src="images/glitter-heels_330x220.jpg" alt="glitter heels"></a>
                <figcaption>Performance Gallery</figcaption>
            </figure>

            <figure>
                <a href="beyond.html"><img src="images/film-set_330x220.jpg" alt="filming set"></a>
                <figcaption>Beyond the Scenes</figcaption>
            </figure>

            <figure>
                <a href="member.html"><img src="images/cinema-curtain_300x197.jpg" alt="closed stage curtain"></a>
                <figcaption>Member Gateway</figcaption>
            </figure>


        </section>

    </main>


    <footer>
        <p><small>&copy; 2019 by <a href="contact.php">Destination Weird, LLC </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="disclaimer.html">Disclaimer</a><br />Designed by Ti Hall</small></p>
    </footer>


    <!-- Nav script -->

    <script>
        $('.block-menu').find('a').each(function() {

            var el = $(this),
                elText = el.text();

            el.addClass("three-d");
            el.append('<span aria-hidden="true" class="three-d-box"><span class="front">' + elText + '</span><span class="back">' + elText + '</span></span>');


        });

    </script>

</body>

</html>
