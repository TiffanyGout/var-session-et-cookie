<?php session_start(); 
$_SESSION['firstname'] = "GOUTTENOIRE";
$_SESSION['lastname'] = "Tiffany";
$_SESSION['age'] = 22;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" text="text/css" ; </head>
</head>

</html>

<body>
<p>Bonjour formateur. Veuillez consulter <a href="index2.php">l'exercice 2</a></p>
<form action="index2.php" method="post";
<p>
    <input type="texte" name="login" placeholder="Entrez votre login"/>
    <input type="password" name="mot_de_passe" placeholder="Entrez votre mot de passe" />
    <input type="submit" value="Valider" />
</p>
</form>

<?php
    /**
     * Récupérer la véritable adresse IP d'un visiteur
     */
    function get_ip() {
    	// IP si internet partagé
    	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    		return $_SERVER['HTTP_CLIENT_IP'];
    	}
    	// IP derrière un proxy
    	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		return $_SERVER['HTTP_X_FORWARDED_FOR'];
    	}
    	// Sinon : IP normale
    	else {
    		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    	}
    }
    
    // Afficher l'adresse IP
    echo 'Adresse IP du visiteur : '.get_ip() . "</br>"; 
    // Affiche le User Agent
    echo $_SERVER['HTTP_USER_AGENT'] . "</br>";
    // Affiche le nom du serveur
    echo $_SERVER["SERVER_NAME"];

?>









