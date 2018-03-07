<?php

	// traitement PHP
    
    //	Connexion à la base de données
	$pdo = new PDO
	(
		'mysql:host=localhost;dbname=portfoliophoto;charset=UTF8',
		'root','',
        [
        	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,// lance des exceptions orange si erreur sql
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC// par defaut lors du fetchAll
	    ]);

	$queryPortraits = $pdo->prepare("SELECT * FROM portraits");
	$queryPortraits->execute();
	$resultPortraits = $queryPortraits->fetchAll(PDO::FETCH_ASSOC);

	$queryPaysages = $pdo->prepare("SELECT * FROM paysages");
	$queryPaysages->execute();
	$resultPaysages = $queryPaysages->fetchAll(PDO::FETCH_ASSOC);

	$queryAnimaux = $pdo->prepare("SELECT * FROM animaux");
	$queryAnimaux->execute();
	$resultAnimaux = $queryAnimaux->fetchAll(PDO::FETCH_ASSOC);

	$pdo = null;
