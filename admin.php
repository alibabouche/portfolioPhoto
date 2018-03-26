<?php 

	// ici nous avons le code concerant l'administration des photos 
	if($_FILES["photoFile"]["size"] < 2097152 && isset($_POST["category"]) && isset($_POST["photoTitle"]) && isset($_POST["photoAlt"]))
	{	
		//'déclaration' des variables
		$category = $_POST["category"];
		$photoTitle = $_POST["photoTitle"];
		$photoAlt = $_POST["photoAlt"];

		//on test l'extension du fichier
		$correctExtensions = array(".jpg", ".jpeg" , ".png");
		$extension = strtolower(strrchr($_FILES["photoFile"]["name"], "."));

		if(in_array($extension, $correctExtensions))
		{
			//on transfert le fichier dans le bon répertoire
			move_uploaded_file($_FILES["photoFile"]["tmp_name"], "img/".$category."/".$photoTitle.$extension);

			$path = "img/".$category."/".$photoTitle.$extension;

			//on insert les informations importantes dans la BDD
			$queryInsert = $pdo->prepare("INSERT INTO photos (`CATEGORY`,`PATH`, `ALTERNATIF`) VALUES (?,?,?)");
			$queryInsert->execute(array($category, $path, $photoAlt));

			echo "transfert ok :D !";
		}
		
	}
	//on test les champs du formulaire
	if(empty($_FILES["photoFile"]) || empty($_POST["category"]) || empty($_POST["photoTitle"]) || empty($_POST["photoAlt"]))
	{
		echo "Merci de renseigner tout les champs svp.";
	}
	
	//on test si le fichier est absent ou trop volumineux
	if($_FILES["photoFile"]["error"] > 0)
	{
		echo "Erreur lors du transfert, vérifiez si le fichier et bien présent et s'il est bien inférieur à 2Mo";
	}
             