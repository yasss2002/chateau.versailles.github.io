<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Chateau de Versailles</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-language" content="fr">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">

</head>

	<body>
<div class="fond">
		<nav>
			<ul class="menu">
		    	<li><a href="page1.php">Accueil</a> </li>
		      
		    	<li> <a href="page2.php">Histoire</a></li>
		       
		    
		   		<!-- <li class="deroulant"><a href="page3.html">Galerie d'Images &ensp;</a>
		    			<ul class="sous">
				    		<li><a href="#">La famille Royale</a></li>
				    		<li><a href="#">Le chateau</a></li>
				    		<li><a href="#">Les jardins</a></li>
		    		
		    			</ul>
		    		</li> -->
		    	
		    	 <li class="button-dropdown">
					    <a href="page3.php" class="dropdown-toggle">
					      Galleries d'images</a>

					    <ul class="sous">
					      <li>
					        <a href="page3.<?php  ?>">
					          La famille Royale</a>
					      </li>
					      <li>
					        <a href="page3.<?php  ?>">
					          Le chateau</a>
					     
					      </li>
					      <li>
					        <a href="page3.php">
					          Les Jardins</a>
					        
					      </li>
					    </ul>
				 </li>

		    	<li><a href="page4.php">Contact</a></li>
		     
			</ul>
		</nav>
	


	<div id="roisoleil">
	<img src="roisoleil.png">
	
	</div>
	
<div class="titre">
	<p>CHÂTEAU DE VERSAILLES</p>
	
</div>
</div>

<div id="popup">
        <img src="img/pub.png" id="pub">
        <img src="img/croix.png" id="croix" onclick="getElementById('popup').style.display='none'">
        <div id="background" onclick="getElementById('popup').style.display='none'"></div>
    </div>
            








<div id="intro"> 
	<p>INTRODUCTION</p>
		<p>Versailles (/vɛʁ.saj/)<br><br>Est une commune française, dans le département des <cite>Yvelines dans la région Île-de-France</cite>, mondialement connue pour son <strong>château</strong> ainsi que pour ses <strong>jardins</strong>.Ville <cite>nouvelle</cite> créée par la volonté du <strong>roi Louis XIV</strong>.<br>Versailles est aussi historiquement connue pour avoir été le lieu de signature de deux traités : le traité de Paris (1783), qui termina la Guerre d'indépendance américaine, le traité de Versailles signé à l'issue de la <cite>Première Guerre mondiale</cite>.<br>Située dans la banlieue ouest de la capitale française, à 17,1 km du centre de Paris, Versailles est au xxie siècle une ville résidentielle aisée avec une économie principalement tertiaire et constitue une destination <bold>touristique internationale</bold> de premier plan. <br>C'est toujours à Versailles que se réunissent en congrès au château, députés et sénateurs, pour y ratifier toute modification de la constitution. Siège de l'université Versailles-Saint-Quentin (UVSQ) et accueillant de nombreuses entreprises, la ville fait partie du projet de pôle de compétitivité technologique Paris-Saclay.</p>
</div>

<img src="jardins.jpg" alt="pub" onclick="getElementById('popup').style.display='block'">

<footer>
	<p>Contact, social...</p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
	</body>
</html>