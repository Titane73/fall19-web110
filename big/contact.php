<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Dev Examples and Inspirations by Thomas "Ti" Hall</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/cd34044565.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/nav.css" />

</head>

<body>

    <main>
        <header>
            <h1><a href="index.html">Ti Hall: A Study in Web Development</a></h1>
            <nav id="cssmenu">
                <ul>
                    <li><a href="../index.html"><i class="fa fa-fw fa-home"></i> WEB110</a></li>
                    <li><a href="index.html"><i class="fa fa-fw fa-institution"></i> BIG</a></li>

                    <!-- Drop down for research pages  -->
                    <li><a href="#"><i class="fas fa-book-open"></i> Research</a>
                        <ul>
                            <li><a href="accessibility.html"><i class="fas fa-universal-access"></i> Accessibility</a></li>

                            <li><a href="forms.html"><i class="fab fa-wpforms"></i> Forms</a></li>

                            <li><a href="smo.html"><i class="fas fa-icons"></i> SMO</a></li>
                        </ul>
                    </li>

                    <li><a href="gallery.html"><i class="fas fa-images"></i> Gallery</a></li>

                    <!-- Drop down for tools pages  -->
                    <li>
                        <a href="#"> <i class="fas fa-toolbox"></i> Tools</a>
                        <ul>
                            <li><a href="calendar.html"><i class="far fa-calendar-alt"></i> Calendar</a></li>
                            <li><a href="map.html"><i class="fas fa-globe-americas"></i> Map</a></li>
                            <li><a href="seo.html"><i class="fab fa-searchengin"></i> SEO</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php"><i class="fas fa-envelope-open-text"></i> Contact Me</a></li>
                </ul>
            </nav>
        </header>

        <section class="contact">
            <h1>Contact Form</h1>

            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here

        $toAddress = "thomas.ti.hall@gmail.com";  //place your/your client's email address here
        $toName = "Ti Hall"; //place your client's name here
        $website = "BIG Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
        </section>

        <footer>
            <p><small>&copy; 2019 by <a href="contact.php">Contact Thomas Hall </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
        </footer>
    </main>

</body>

</html>