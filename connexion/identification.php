<?php session_start();

include("donnees.php");

if(!isset($_SESSION['_login'])&& !isset($_SESSION['_pass']))
{
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel='icon' href='../CTS.png'/>
		<title>CTS - Accueil</title>
		<link rel='stylesheet' type='text/css' href='../css/accueil.css'>
	</head>
	<body>
		<p><b style="color:red">espace sécurisé</b><br/>Connectez-vous pour accéder à cette page</p>
 	<?php include("../accueil/accueil2.php");
	exit();
}
else
{
	if(($_admin_login==$_SESSION['_login'])&&($_SESSION['_pass']==$_admin_pass))
	{
	?>
<!DOCTYPE html>
<html>
	<head>
    		<link rel='stylesheet' type='text/css' href='/css/connexion.css'>
		<title>Administration</title>
    		<script type='text/javascript'>
	    		function Init()
	  		{
				alert('acutellement en retard, la livraison des rames 3000 et la destruction des anciennes rames 1000')
			}
	    	</script>
	</head>
    	<body onload='Init()'>
    		bonjour administrateur "<?php echo $_SESSION['_login'] ?>", vous nous avez manqués !
		<br/><br/>
    		<a href='../accueil/accueil.php'>retour à l'accueil</a>
		<br/><br/>
    		<?php include("../fin.html"); ?>
	</body>
</html>
	<?php
	}
	elseif(($_user_login==$_SESSION['_login'])&&($_SESSION['_pass']==$_user_pass))
	{
	?>
<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='/css/connexion.css'>
    		<title>Administration</title>
		<script type='text/javascript'>
			function Init()
	    		{
	    		}
	    	</script>
	</head>
    	<body onload='Init()'>
    		Bonjour utilisateur <?php echo $_SESSION['_login']; ?>
	    	<br/><br/>
	    	vous avez eu un problème sur la ligne? alors remplissez le formulaire ci-dessous pour nous en informer!<br/>
	    	<form action='probleme.php' method='post'>
	    		<table>
	    			<tr>
	    				<td>Nom d'utilisateur:</td>
	    				<td><input type='text' name='nom' value='<?php echo $_SESSION['_login'] ?>' disabled='disabled'></td>
	    			</tr>
	    			<tr>
	    				<td>le problème que vous avez rencontrés</td>
	    				<td><input type='text' name='titre' style='width: 200px;' value=''></td>
	    			</tr>
				<tr>
	    				<td>une courte description de votre problème</td>
	    				<td><input type='text' name='probleme' style='width: 500px;' value=''></td>
	    			</tr>
	    			<tr>
	    				<td>votre adresse mail</td>
	    				<td><input type='email' name='mail' style='width: 300px;' value=''></td>
	    			</tr>
	    			<tr colspan='2'>
	    				<td><input type='submit' value='transmettre le problème'></td>
	    			</tr>
			</table>
		</form>
	    	<br/><br/>
	    	<a href='../accueil/accueil.php'>retour à l'accueil</a>
	    	<br/><br/>
	    	<?php include("../fin.html"); ?>
	</body>
</html>
	<?php 
	}
	else
	{
	?>
<!DOCTYPE html>
<html>
	<head>
        	<link rel='icon' href='../CTS.png'/>
        	<title>CTS - Accueil</title>
        	<link rel='stylesheet' type='text/css' href='../css/accueil.css'>
        </head>
        <body>
		<p><b style='color:red'>Connexion Impossible</b><br/>Mauvais Nom d'utilisateur ou mot de passe!</p>
        <?php
		include("../accueil/accueil2.php");
        	exit();
	}
}
