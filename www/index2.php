<?php session_start();

setcookie("login", $_POST["login"], time()+3600);
setcookie("motdepasse", $_POST["motdepasse"], time()+3600);

echo $_SESSION['firstname'] = "GOUTTENOIRE"  ."</br>" . $_SESSION['lastname'] = "Tiffany"  ."</br>" .$_SESSION['age'] = 22;

echo $_COOKIE["login"]. " " . $_COOKIE["password"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" text="text/css" ; </head>
</head>

</html>
<body>

</body>
<p>Pour modifier les cookies, formateur. Veuillez consulter <a href="index3.php">la page 3</a></p>