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
        <link href="https://fonts.googleapis.com/css?family=Roboto|Sacramento|Montserrat" rel="stylesheet">  
        <link rel="stylesheet" href="css/main.css">                

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1><a href="./">Ali Kheroua</a></h1>
            </header>
            <main>
                <form method="post" action="contact.php">
                    <fieldset>
                        <legend>Formulaire de contact</legend>
                        <p>
                            <label for="lastName">Nom*</label>
                            <input type="text" id="lastName" name="lastName" >
                        </p>
                        <p>
                            <label for="firstName">Prénom*</label>
                            <input type="text" id="firstName" name="firstName" > 
                        </p>
                        <p>
                            <label for="email">Email*</label>
                            <input id="email" type="text" name="email" >
                        </p>
                        <p>
                            <label for="confirmEmail">Tu es sûr que ton mail est correcte ?*</label>
                            <input id="confirmEmail" type="text" name="confirmEmail" >
                        </p>
                        <p class="textarea">
                            <label for="message">Message*</label>
                            <textarea id="message" name="message" placeholder="Posez vos questions et/ou remarques... elles sont les bienvenues ;=)" ></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Envoyer" name="mailform" />
                        </p>
                        <small><p>*: Champs obligatoire.</p></small>
                    </fieldset>                
                </form>
            </main>
            <footer>
                <div class="footer">
                    <ul>
                        <li><a href="contactPage.php"  title="Contact"><i class="fas fa-comments iconsFooter"></i></a></li>
                        <li><a href="https://www.flickr.com/photos/137867147@N07/" title="flickr"><i class="fab fa-flickr iconsFooter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/ali-kheroua-12061014b" title="linkedin"><i class="fab fa-linkedin iconsFooter"></i></a></li>
                        <li><a href="https://www.instagram.com/alibabouche/" title="instagram"><i class="fab fa-instagram iconsFooter"></i></a></li>
                        <li><a href="adminPage.php" target="blank" title="Admin User"><i class="fas fa-user iconsFooter"></i></a></li>
                    </ul>
                    
                </div>
            </footer>
        </div>
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
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
    </body>
</html>
