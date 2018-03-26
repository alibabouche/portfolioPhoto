<?php
    
    //	Connexion à la base de données
	$pdo = new PDO
	(
		'mysql:host=localhost;dbname=portfoliophoto;charset=UTF8',
		'root','',
        [
        	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,// lance des exceptions orange si erreur sql
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC// par defaut lors du fetchAll
	    ]);

	//sélection de
	$queryPhotoCategory = $pdo->prepare("SELECT * FROM photos");
	$queryPhotoCategory->execute();
	$resultPhotoCategory = $queryPhotoCategory->fetchAll(PDO::FETCH_ASSOC);

	/*$queryPaysages = $pdo->prepare("SELECT * FROM photos WHERE CATEGORY = 'paysage'");
	$queryPaysages->execute();
	$resultPaysages = $queryPaysages->fetchAll(PDO::FETCH_ASSOC);

	$queryAnimaux = $pdo->prepare("SELECT * FROM photos WHERE CATEGORY = 'animaux'");
	$queryAnimaux->execute();
	$resultAnimaux = $queryAnimaux->fetchAll(PDO::FETCH_ASSOC);
*/
	
	//Sélection de la table complète
	$queryPhoto = $pdo->prepare("SELECT * FROM photos");
	$queryPhoto->execute();
	$resultPhoto = $queryPhoto->fetchAll(PDO::FETCH_ASSOC);
	

	//pour supression des photos...
	if(isset($_POST["idPhoto"]))
	{
		//...des dossiers serveur
		$idPhoto = $_POST["idPhoto"];
		$queryDeletePhotoFile = $pdo->prepare("SELECT `PATH` FROM photos WHERE ? =ID_PHOTO");
		$queryDeletePhotoFile->execute([$idPhoto]);
		$resultDeletePhotoFile = $queryDeletePhotoFile->fetch(PDO::FETCH_ASSOC);

		unlink("./".$resultDeletePhotoFile["PATH"]);

		//...de la BDD		
		$queryDeletePhoto = $pdo->prepare("DELETE FROM photos WHERE ? = ID_PHOTO");
		$queryDeletePhoto->execute([$idPhoto]);

	}



