<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-language" content="fr">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
</head>
<body>

<nav>
			<ul class="deroulant">
		    	<li><a href="page1.php">Accueil</a> </li>
		      
		    	<li> <a href="page2.php">Histoire</a></li>
		    	
		    	 <li class="button-dropdown">
					    <a href="page3.php" class="dropdown-toggle">
					      Galleries d'images</a>

					    <ul class="sous">
					      <li>
					        <a href="page3.php">
					          La famille Royale</a>
					      </li>
					      <li>
					        <a href="page3.php">
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




<header>
	<h1>CONTACT</h1>
</header>





	<div class="formulaire">		
		<label for="nom">Nom :</label>
		<br>
		<input type="text" placeholder="votre nom" id="nom">
		<br>
		<br>

		<label for="email">E-mail :</label>
		<br>
		<input type="text" placeholder="votre e-mail" id="email">
		<br>
		<br>

		<label for="Message">Question :</label>
		<br>
		<textarea id="question"></textarea>
		<br>
		<br>


		<!-- <button id="valider">Valider</button> -->
		<button class="valider">Valider</button> 

		<p id="retour"></p>

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="form4.js"></script>

</body>
</html>