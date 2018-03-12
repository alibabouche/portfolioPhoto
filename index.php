<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">               
        <link rel="stylesheet" href="css/main.css">

        <!-- SLICK css -->
        
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
            <div class="container">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <?php include "connectionPDO.php" ?>
            
            <header>
            <h1><a href="./">Ali Kh</a></h1>
            <nav>
                <ul>
                    <li class="Portraits">Portraits</li>
                    <li class="Paysages">Paysages</li>
                    <li class="Animaux">Animaux</li>
                </ul>
            </nav>
            </header>
            <main>
                <section id="slider">
                    <div class="slider slider-portraits">
                        <?php 
                            foreach($resultPortraits as $resultsPortraits)
                            {
                                echo ("<div><img class='img imgPortraits' src='".$resultsPortraits["PATH"]."' alt='".$resultsPortraits["DESCRIPTION"]."'/></div>");
                            }?>
                            </div>
                    <div class="slider slider-paysages">
                        <?php 
                            foreach($resultPaysages as $resultsPaysages)
                            {
                                echo ("<div><img class='img imgPaysages' src='".$resultsPaysages["PATH"]."' alt='".$resultsPaysages["DESCRIPTION"]."'/></div>");
                            }
                        ?>
                            </div>
                    <div class="slider slider-animaux">
                        <?php
                            foreach($resultAnimaux as $resultsAnimaux)
                            {
                                echo ("<div><img class='img imgAnimaux' src='".$resultsAnimaux["PATH"]."' alt='".$resultsAnimaux["DESCRIPTION"]."'/></div>");
                            }
                        ?>
                    </div>
                </section>
            </main>
            <footer>
                <div class="footer">
                    <a href="contact.phtml" class="contact">Contactez-moi</a>
                </div>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- SLICK plugin-->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
    </body>
</html>
