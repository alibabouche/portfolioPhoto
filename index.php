<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ali Kheroua Portfolio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Sacramento|Montserrat" rel="stylesheet">               
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
            <?php include "connectionPDO.php"; ?>
            
            <header>
            <h1><a href="./">Ali Kheroua</a></h1>
            <nav>
                <ul>
                    <li class="Portraits">Portraits</li>
                    <li class="Paysages">Paysages</li>
                    <li class="Animaux">Animaux</li>
                </ul>
            </nav>
            </header>
            <main>
                <section>
                    <p class="bio"><img src="img/bio.jpg" alt="Ali Kheroua" />Dans la photographie depuis quelques années, avec ma boite à images toujours prête à être dégainée. 
                        <br/>
                        <br/>
                    Capturer des moments uniques, des rires, des interrogations des grimaces et les transformer en souvenirs, j'adore !
                        <br/>
                        <br/>
                    Un anniversaire, un mariage, ou plus simplement une soirée mémorable méritent qu'on puis s'en souvenir longtemps.
                    <br/>
                    <br/>
                        Ici on est ouvert, il n'y à plus qu'à shooter et s'amuser.
                        Alors si une séance photo vous tente, en hurbex ou en ville, dans un salon ou dans une piscine abandonnée, en couple ou en solo, des enfants ou des grands sages, je vous propose de mon temps avec joie.
                        <br/>
                        <br />
                    J'ai hâte de vous rencontrez !
                    </p>
                </section>
                <section id="slider">
                    <div class="slider slider-portraits">

                        <?php 
                            foreach($resultPhotoCategory as $resultsPhotoCategory)
                            {       

                                if($resultsPhotoCategory["CATEGORY"] == "portrait")
                                {
                                    echo "<div><img class='img imgPortraits' src='".$resultsPhotoCategory["PATH"]."' alt='".$resultsPhotoCategory["ALTERNATIF"]."'/></div>";
                                }                                
                            }
                        ?>
                    </div>
                    <div class="slider slider-paysages">
                        <?php 
                            foreach($resultPhotoCategory as $resultsPhotoCategory)
                            {
                                if($resultsPhotoCategory["CATEGORY"] == "paysage")
                                {
                                    echo "<div><img class='img imgPaysages' src='".$resultsPhotoCategory["PATH"]."' alt='".$resultsPhotoCategory["ALTERNATIF"]."'/></div>";
                                }  
                            }
                        ?>
                    </div>
                    <div class="slider slider-animaux">
                        <?php
                            foreach($resultPhotoCategory as $resultsPhotoCategory)
                            {
                                if($resultsPhotoCategory["CATEGORY"] == "animaux")
                                {
                                    echo "<div><img class='img imgAnimaux' src='".$resultsPhotoCategory["PATH"]."' alt='".$resultsPhotoCategory["ALTERNATIF"]."'/></div>";
                                }  
                            }
                        ?>
                    </div>
                </section>
            </main>
            <footer>
                <div class="footer">
                    <ul class="ulFooter">
                        <li><a href="contact.phtml" class="contactLink" title="Contact"><i class="fas fa-comments iconsFooter"></i></a></li>
                        <li><a href="https://www.flickr.com/photos/137867147@N07/" target="blank" title="flickr"><i class="fab fa-flickr iconsFooter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/ali-kheroua-12061014b" target="blank" title="linkedin"><i class="fab fa-linkedin iconsFooter"></i></a></li>
                        <li><a href="https://www.instagram.com/alibabouche/" target="blank" title="instagram"><i class="fab fa-instagram iconsFooter"></i></a></li>
                        <li><a href="adminPage.php" target="blank" title="Admin User"><i class="fas fa-user iconsFooter"></i></a></li>
                    </ul>
                    
                </div>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- SLICK plugin-->
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
    </body>
</html>
