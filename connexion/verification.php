<?php session_start();

include("donnees.php");

if(isset($_POST)&& !empty($_POST['login'] && !empty($_POST['mdp'])))
{
	$login=htmlentities($_POST['login'],ENT_QUOTES);
	$mdp=htmlentities($_POST['mdp'],ENT_QUOTES);

	$password_md5=md5($mdp);
	
	if((($_admin_login==$login) && !empty($_POST['mdp'])) || ($_user_login==$login) && !empty($_POST['mdp']))
	{
		$_SESSION['_login']=htmlspecialchars($login);
		$_SESSION['_pass']=htmlspecialchars($password_md5);
		
		include ("identification.php");
		exit();
	}
	else
	{
	    echo "
        <!DOCTYPE html>
        <html>
        <head>
        
        <link rel='icon' href='../CTS.png'/>
        <title>CTS - Accueil</title>
        
        <link rel='stylesheet' type='text/css' href='../css/accueil.css'>
        
        </head>
        <body>";
        echo "<p><b style='color:red'>Connexion Impossible</b><br/>Mauvais Nom d'utilisateur ou mot de passe!</p>";
        include("../accueil/accueil2.php");
        exit();
	}
}
else
{
    echo "
    <!DOCTYPE html>
    <html>
    <head>
    
    <link rel='icon' href='../CTS.png'/>
    <title>CTS - Accueil</title>

    <link rel='stylesheet' type='text/css' href='../css/accueil.css'>
    
    </head>
    <body>";
    echo "<p><b style='color:red'>Connexion Impossible...</b><br/>vous n'avez pas entrés les informations de connexion!</p>";
    include("../accueil/accueil2.php");
    exit();
}
?>