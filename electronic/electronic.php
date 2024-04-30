<!DOCTYPE html>
<html>
<head>

<link rel="icon" href="/CTS.png"/>
<title>Bus de la CTS</title>

<link rel="stylesheet" type="text/css" href="/css/electronic.css">

<script type="text/javascript" src="electronic.js"></script>


</head>
<body onload="Selection()">

<table>
<tr>
<td>Modèle d'électronique</td>
</tr>

<tr>
<td>
<select type="text" name="choixtype" id="choixtype">
    <option value="afficheur" onclick="Selection()">afficheur</option>
    <option value="portes" onclick="Selection()">portes</option>
    <option value="sonore" onclick="Selection()">Sonore</option>
    <option value="bord" onclick="Selection()">Tableau de bord</option>
    <option value="capteur" onclick="Selection()">capteur de présence</option>
    <option value="camera" onclick="Selection()">caméra de surveillance</option>
    <option value="valideur" onclick="Selection()">valideur de cartes badgeo</option>
    <option value="ticket" onclick="Selection()">distributeur automatique</option>
    <option value="feux" onclick="Selection()">feux de signalisation</option>
    <option value="bouton" onclick="Selection()">système de boutons dans les bus</option>
</select>
</td>

</tr>
</table>
<br/><br/>

<input type="text" disabled="disabled" value="" id="infos" style="text-align: center;">
<br/><br/>

<img style="height: 200px; width: 200px;" src="" id="image"/>
<img style="height: 200px; width: 200px;" src="" id="image2" display=""/>
<img style="height: 200px; width: 200px;" src="" id="image3" display=""/>

<div id="lienimage">
<a href="afficheur4.png" target="_blank">voir l'afficheur pour les arrêts de bus (futurement sur tous les arrêts de bus)</a><br/>
<a href="https://www.itxpt.org/catalogue/" target="_blank">pour plus d'infos sur le 3ème afficheur</a>
</div>

<br/><br/>


<a href='../accueil/accueil.php'>retour à l'accueil</a>
<br/><br/>

<?php include("../fin.html"); ?>

</body>
</html>