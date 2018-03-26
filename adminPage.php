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
        <div class="container adminPage">
            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
            <?php include "connectionPDO.php"; ?>
            
            <a href="adminPage.php">Admin</a>
            <header>
            <h1><a href="./">Ali Kheroua</a></h1>
            </header>
            <main>
                <section>
                    <form method="post" action="admin.php" enctype="multipart/form-data">
                        <fieldset>
                            <legend>Insersion photo</legend>
                            <p>
                                <label for="category">Catégorie*</label>
                                <select id="category" name="category">
                                    <option value="animaux">animaux</option>
                                    <option value="paysages">paysages</option>
                                    <option value="portraits">portraits</option>
                                </select>
                            </p>
                            <p>
                                <label for="photoTitle">Titre de la photo*</label>
                                <input type="text" name="photoTitle" id="photoTitle" required>
                            </p>
                            <p>
                                <label for="photoAlt">Texte alternatif*</label>
                                <input type="text" name="photoAlt" id="photoAlt" required>
                            </p>
                            <p>
                                <label for="photoFile">Fichier (pas plus de 4Mo)*</label>
                                <input type="hidden" name="maxFileSize" value="40960000">
                                <input type="file" name="photoFile" accept =".jpg, .jpeg, .png" id="photoFile" required>
                            </p>
                            <p>
                                <input type="submit" name="sendPhoto" value="Envoyer" class="subAddImage">
                            </p>
                        </fieldset>
                    </form>   
                </section>  
                <section>
                    <table>
                        <tr>
                            <th>Catégorie</th>
                            <th>Description</th>
                            <th>Aperçus</th>
                            <th>Supprimer</th>
                        </tr> 
                        <!--On affiche la table entière -->
                        <?php foreach($resultPhoto as $resultPhotos): ?>  
                            <tr>
                                <?php
                                echo "<td>".$resultPhotos["CATEGORY"]."</td>";
                                echo "<td>".$resultPhotos["ALTERNATIF"]."</td>";
                                echo "<td><img src='".$resultPhotos["PATH"]."' alt='".$resultPhotos["ALTERNATIF"]."'/></td>";
                                echo "<td data-id='".$resultPhotos["ID_PHOTO"]."'><i class='far fa-trash-alt trash'></i></td>"; ?>
                            </tr>
                        <?php endforeach ?>                   
                    </table>
                </section>            
            </main>

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
