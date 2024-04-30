/*
<select type="text" name="choixtype" id="choixtype">
    <option value="afficheur" id="Aff" onclick="Selection()">afficheur</option>
    <option value="portes" id="Sol" onclick="Selection()">portes</option>
    <option value="sonore" id="HB" onclick="Selection()">Sonore</option>
    <option value="bord" id="Al" onclick="Selection()">Tableau de bord</option>
</select>
*/

function Selection()
{
	var ok = document.getElementById("choixtype");
	var constructeur = ok.options[ok.selectedIndex].value;
	
	var image = document.getElementById("image");
	var image2 = document.getElementById("image2");
	var image3 = document.getElementById("image3");
	var lien = document.getElementById("lienimage");
	var infos = document.getElementById("infos");
	
	
	if(constructeur == "afficheur")
	{
	    display();
	    lien.style.display = "block";
	    
	    image.src = "afficheur.png";
	    image2.src = "afficheur2.png";
	    image3.src = "afficheur3.png";
	    image.style.width = "500px";
	    image2.style.width = "400px";
	    image3.style.width = "500px";
	    infos.value = "plusieurs afficheurs, le premier provenant du tram bombardier, le second d'un bus de la CTBR, et le troisième d'un tram récent de la CTS.";
	    infos.style.width = "830px";
	}
	else
	{
	    lien.style.display = "none";
	    if(constructeur == "portes")
	    {
	        none();
	        
	        image.style.width = "150px";
	        image.src = "porte.png";
	        infos.style.width = "250px";
	        infos.value = "une porte d'un vieux tram bombardier";
	    }
	    else
	    {
	        if(constructeur == "sonore")
	        {
	            none();
	            
	            image.style.width = "200px";
	            image.src = "son.png";
	            infos.style.width = "800px";
	            infos.value = "l'annonce de la prochaine station est gérée électroniquement, mais inutile de symboliser plus difficilement cela que par l'icone de son.";
	        }
	        else
	        {
	            if(constructeur == "bord")
	            {
	                none();
	                
	                image.style.width = "250px";
	                image.src = "bord.png";
	                infos.style.width = "320px";
	                infos.value = "un tableau de bord d'un tram externe à strasbourg";
	            }
	            else
	            {
	                if(constructeur == "capteur")
	                {
	                    display1();
	                    none2();
	                    
	                    image.style.width = "250px";
	                    image2.style.width = "250px";
	                    image.src = "capteur.png";
	                    image2.src = "capteur2.png";
	                    infos.style.width = "580px";
	                    infos.value = "nous avons 2 capteurs: celui avec réfléchissant (anciens trams), et celui sans (nouveaux trams)";
	                }
	                else
	                {
	                    if(constructeur == "camera")
	                    {
	                        display1();
	                        none2();
	                        
	                        image.style.width = "200px";
	                        image2.style.width = "500px";
	                        image.src = "camera.png";
	                        image2.src = "camera2.png";
	                        
	                        infos.style.width = "630px";
	                        infos.value = "2 caméras présentés, la première provenant d'un tram d'alstom, la seconde provenant d'un bombardier";
	                    }
	                    else
	                    {
	                        if(constructeur == "valideur")
	                        {
	                            none();
	                            
	                            image.style.width = "140px";
	                            image.src = "valideur.png";
	                            
	                            infos.style.width = "260px";
	                            infos.value = "un valideur, sur le quai de graffenstaden";
	                        }
	                        else
	                        {
	                            if(constructeur == "ticket")
	                            {
	                                none();
	                                
	                                image.style.width = "180px";
	                                image.src = "ticket.png";
	                                
	                                infos.style.width = "380px";
	                                infos.value = "une machine à ticket, trouvable à toutes les stations de tram.";
	                            }
	                            else
	                            {
	                                if(constructeur == "feux")
	                                {
	                                    display();
	                                    
	                                    image.style.width = "125px";
	                                    image2.style.width = "100px";
	                                    image3.style.width = "100px";
	                                    
	                                    image.src = "feu.png";
	                                    image2.src = "feu2.png";
	                                    image3.src = "feu3.png";
	                                    infos.style.width = "850px";
	                                    infos.value = "3 types de feux différents pour les trams: le premier laissant passer, le second, demandant de ralentir, et le troisième, interdisant le passage.";
	                                }
	                                else
	                                {
	                                    if(constructeur == "bouton")
	                                    {
	                                        display1();
	                                        none2();
	                                        
	                                        image.style.width = "150px";
	                                        image2.style.width = "250px";
	                                        image.src = "bouton.png";
	                                        image2.src = "bouton2.png";
	                                        
	                                        infos.style.width = "800px";
	                                        infos.value = "2 types de boutons, le premier permettant d'ouvrir les portes arrières du bus (pour descendre), et les 2 (oui) pour demander l'arrêt.";
	                                    }
	                                    else
	                                    {
	                                        alert("erreur 51 remarquée, merci de rafraîchir la page. si l'erreur persiste, merci d'en contacter son créateur, dont l'adresse se trouve tout en bas de la page");
	                                    }
	                                }
	                            }
	                        }
	                    }
	                }
	            }
	        }
	    }
	}
}

function display()
{
    document.getElementById("image2").style.display = "inline";
    document.getElementById("image3").style.display = "inline";
}

function display1()
{
    document.getElementById("image2").style.display = "inline";
}

function none()
{
    document.getElementById("image2").style.display = "none";
    document.getElementById("image3").style.display = "none";
}

function none2()
{
    document.getElementById("image3").style.display = "none";
}


/*

*/