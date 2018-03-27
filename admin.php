<?php 

	// ici nous avons le code concerant l'administration des photos 
	if(isset($_FILES["photoFile"]["error"]) && isset($_POST["category"]) && isset($_POST["photoTitle"]) && isset($_POST["photoAlt"]))
	{	
		if($_FILES["photoFile"]["error"] == 0)
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
				include("connectionPDO.php");
				$queryInsert = $pdo->prepare("INSERT INTO photos (`CATEGORY`,`PATH`, `ALTERNATIF`) VALUES (?,?,?)");
				$queryInsert->execute(array($category, $path, $photoAlt));
				header("location: adminPage.php");
			}		
		}
			if($_FILES["photoFile"]["error"] > 0)
		{
			echo "Erreur lors du transfert, vérifiez si le fichier et bien présent et s'il est bien inférieur à 4Mo.</br>
				Erreur:".$_FILES["photoFile"]["error"];
		}

		//on test les champs du formulaire
		if(empty($_FILES["photoFile"]) || empty($_POST["category"]) || empty($_POST["photoTitle"]) || empty($_POST["photoAlt"]))
		{
			echo "Merci de renseigner tout les champs svp.";
		}
	}

	session_start();
	if(isset($_POST["login"]) && isset($_POST["password"]))
	{
		if($_POST["login"] == "admin" && $_POST["password"] == "admin")
		{
			$_SESSION["connection"] = true;
			header("Location: adminPage.php");
		}else{
			$_SESSION["connection"] = false;
			header("Location: adminLog.php");
		}
	}
