<?php
	
	$header ="MIME-Version: 1.0\r\n";
	$header.='From:"Youssef Kheroua"<kheroua.s@gmail.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	if(!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["message"]))
	{			
		if(isset($_POST["email"]))
		{
			if(preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $_POST["email"]))
			{				
				if(isset($_POST["confirmEmail"]))
				{					
					if($_POST["email"] == $_POST["confirmEmail"])
					{
						$message = "<html><body><div align='left'><p>Nom: ";
						$message .= $_POST["lastName"]."</p><p>Prénom: ".$_POST["firstName"]."</p><p>Email: ".$_POST["email"];
						$message .= "</p><p>Message: ";
						$message .= $_POST["message"];
						$message .= "</p></div></body></html>";
						mail("kheroua.s@gmail.com", "Portfolio Photo", $message, $header);	
						Header("Location: ./");
					}else{
						echo "Merci de confirmer la même adresse email";
					}						
				}else{
					echo "Merci de confirmer votre adresse email";
				}				
			}else{
				echo "Merci d'entrer une adresse mail valide";
			}			
		}
	}else{
		echo "Merci de renseigner tout les champs requis.";
	}
	

?>