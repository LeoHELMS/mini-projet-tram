<?php session_start();
$email = htmlspecialchars($_POST['mail']);
$destinataire = "leohelms18@gmail.com";
$provenance = "en provenance de ".$_SESSION['_login'].", dont l'adresse mail est ".$email;
$titre = htmlspecialchars($_POST['titre']);
$probleme = htmlspecialchars($_POST['probleme']);

mail($destinataire, $titre, $probleme, $provenance);

echo "votre mail à bien été transmis!<br/><br/>
<a href='../accueil/accueil.php'>retour à l'accueil</a>
<br/><br/>
";

?>