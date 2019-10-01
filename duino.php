<!--   -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/SASS/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title>Duino</title>
</head>

<body>
<!--*********************************** HEADER *****************************************-->
	<header>
		<nav>
			<ul>
				<li><a href="index.php"><i class="fas fa-arrow-circle-left"></i></a></li>
				<li><a href="#Presentation">Présentation</a></li>
				<li><a href="#DuinoV1">Première version</a></li>
				<li><a href="#DuinoV2">Deuxième version</a></li>
				<li><a href="#DuinoV3">Troisième version</a></li>
				<li><a href="#Details">Plus de détails</a></li>
				<li><a href="#Bonus">Bonus</a></li>
			</ul>
		</nav>
	
		<div id="titreMoi">
			<img id ="PhotoMoi" src="assets/images/moi.jpg" alt="slider"><p><span>Dubel Sébastien</span><br />Développeur Web junior</p>
		</div>

		
	</header>

	<section id="Presentation">
		<div class="titre">
			<hr><h2>Présentation de Duino</h2><hr>
		</div>
		<div class="bienvenue">
	    	<p>Duino c'est le nom de mon robot ! Pour schématiser, celui-ci pourrait ce décomposer en deux parties distinctes :<br />La partie "cerveau" géré par la <a href="https://raspbian-france.fr/" target="_blank" title="Visitez Raspbian France. (Ouvre un nouvel onglet)">Raspberry Pi3</a> , véritable mini pc sous Linux avec tout ce que cela comporte ! Et la partie "mécanique" géré par l'<a href="https://store.arduino.cc/" target="_blank" title="Visitez le site du fabricant">Arduino Uno</a> , relié à différents composants comme des moteurs ou des capteurs pour qu'il puisse intéragir avec son environnement. L'ensemble forme un système embarqué complet contrôlable à distance avec des utilitaires comme <a href="https://www.realvnc.com/fr/connect/download/viewer/" target="_blank" title="Visitez realvnc.com. (Ouvre un nouvel onglet)">VNC </a> par exemple qui est installé de base avec le système d'exploitation officiel. Le tout programmé en Arduino (dérivé du C++) pour l'Arduino, Python3 pour la Raspberry et Tkinter pour l'interface du programme.</p>
		</div>
	</section>

	<section id="DuinoV1">
		<div class="titre">
			<hr><h2>Première version</h2><hr>
		</div>
		
		<div class="ligne1Duino">
			<img class="photoDuino" src="assets/images/DuinoV1/1.jpg" alt="">
			<div class="txt1"><p>Tout a commencé avec l'achat d'une carte Arduino et la découverte de ce microcontroleur &#x1F60D; en faisant clignoter des diodes dans un premier temps et l'apprentissage des bases du langage Arduino/C++ et en ajoutant différents composants ....</p></div>
			<img class="photoDuino" src="assets/images/DuinoV1/2.jpg" alt="">
			<div class="txt3"><p>.....comme des moteurs, des écrans lcd, des sonnars. L'ensemble monté sur un chassis. Vient ensuite l'ajout d'une Raspberry pour avoir un systeme embarqué complet.&#x1F603; Plus besoin de pc pour programmer ou contrôler l'Arduino (ni de ses extansions pour la wifi).....</p></div>
			<img class="photoDuino" src="assets/images/DuinoV1/3.jpg" alt="">
			<div class="txt1"><p>.....Il est alors principalement capable de se déplacer seul en évitant les obstacles. Mais tout ces composants commencent à être à l'étroit sur ce chassis.</p></div>
			<img class="photoDuino" src="assets/images/DuinoV1/4.jpg" alt="">
		</div>
	</section>



	<section id="DuinoV2">
		<div class="titre">
			<hr><h2>Deuxième version</h2><hr>
		</div>
		<div class="ligne1Duino">
			<div class="txt3"><p>Vient alors la version 2. Trois nouveautées font leur apparitions. Tout d'abort le chassis, fait de matériaux de récupération comme le PVC découpés sur mesure avec les moyens du bord et un ventilateur de PC &#x1F605;. Ensuite changement du système d'exploitation de la Raspberry de Raspbian Jessie vers Raspbian Stretch et pour finir... </p></div>
			<img class="photoDuino" src="assets/images/DuinoV2/1.jpg" alt="">
			<img class="photoDuino" src="assets/images/DuinoV2/2.jpg" alt="">
			<div class="txt6"><p class="txtBlack">...ajout d'une caméra et d'Open CV.Il se déplace seule, recule et cherche un autre chemin si un objet se trouve devant lui à moins de 15 cm. On peux aussi le téléguider directement depuis un clavier, une manette et depuis n'importe ou sur la planète en utilisant VNC par exemple. </p></div>
			<img class="photoDuino" src="assets/images/DuinoV2/3.jpg" alt="">
			<img class="photoDuino" src="assets/images/DuinoV2/4.jpg" alt="">
			<div class="txt6"><p class="txtBlack">Création d'un programme sous Python 3 pour regrouper ses différentes fonctions et pour pouvoir le contrôler. Coté matériel, tout va bien. Je continue de développer le programme, je découvre nottamment les possibilités d'Open CV quand survient le drame...&#x1F631; </p></div>
			<img class="photoDuino" src="assets/images/DuinoV2/5.jpg" alt="">
			<div class="txt2"><p>Oui j'ai marché dessus &#x1F62D;. Chassis, carte SD et ventilateur cassés! Adieux Duino. Projet mis en pause en attendant l'aquisition d'un nouveau chassis et de remettre la main sur différentes sauvegardes du programme de l' Arduino sur mon pc. </p></div>
			<img class="photoDuino" src="assets/images/DuinoV2/6.jpg" alt="">
		</div>
	</section>


	<section id="DuinoV3">
		<div class="titre">
			<hr><h2>Troisième version</h2><hr>
		</div>

		<div class="ligne1Duino">
			<img class="photoDuino2" src="assets/images/DuinoV3/1b.jpg" alt="">
			<div class="txt1"><p>Février 2019, retour de Duino dans sa version 3. Même configuration avec cette fois ci 4 moteurs CC, 1 pour chaques roues et 1 moteurs pas à pas pour lui créer une tête articulée (avec les moyens du bords encore une fois). Ainsi qu'un abaisseur de tension.</p></div>
			<img class="photoDuino2" src="assets/images/DuinoV3/2b.jpg" alt="">
			<div class="txt2"><p>La Raspberry et l'Arduino sont toujours reliées entre elles par USB (le gros cable bleu) en attendant de voir pour l'i2C. Il ne restera que très peu de temps comme ça. J'ai espacé les 2 plaques qui composent le chassis, mis le breadbord en dessous....</p></div>
			<img class="photoDuino2" src="assets/images/DuinoV3/4b.jpg" alt="">
			<div class="txt2"><p>.....pour que les câbles soit un peu plus discrets. Et surtout ajouté une ventilation de récupération sur la Raspberry. Aucunes pièces n'ai soudées, tout et démontable et modifiable. Les seuls limites sont l'argent ou le temps investi.</p></div>
			<img class="photoDuino2" src="assets/images/DuinoV3/5b.jpg" alt="">
			<img class="photoDuino2" src="assets/images/DuinoV3/6b.jpg" alt="">
			<img class="photoDuino3" src="assets/images/DuinoV3/7b.jpg" alt="">
			<img class="photoDuino3" src="assets/images/DuinoV3/8b.jpg" alt="">
			<div class="txt4"><p>Le voilà cette fois ci dans ça dernière version. Je vais pouvoir me pencher seulement sur la programmation et continuer d'apprendre et de découvrir Python3 et Linux. Il faut nottament que je m'occupe du traitement des données brutes de l'accéléromètre, les threads, OpenCV pour la reconnaissance d'objets ou de visage, continuer le programme pour contrôler Duino (image de programme si dessous). Celui si s'éxécute sur la Raspberry pour envoyer et recevoir des données à l'Arduino (elles communiquent entre elles par USB). Pour utilisation à distance, je me connecte à la Raspberry via VNC. </p></div>
			<img class="photoDuino3" src="assets/images/DuinoV3/9b.jpg" alt="">
			<img class="photoDuino5" src="assets/images/programme3b.png" alt="">
		</div>

	</section>



	<section id="Details">
		<div class="titre">
			<hr><h2>Plus de détails sur Duino</h2><hr>
		</div>
		
		<p>Composition de Duino :<br /><br /> -1 Sonar HC-SR04 : Sonar à ultrason. Pour détecter les objets devant lui.<br />-1 Moteur pas à pas 28byj-48 5V avec son driver ULN2003 : Pour créer une tête articulée.<br />-4 moteurs CC de 6V (moteurs de qualité moyenne très peu d'informations).<br />-2 L293D : Double pont en H pour controller les 4 moteurs et inversser leurs polarités électroniquement.<br />-2 SN 74HC595 N : Pour multiplier les sorties de l'Arduino.<br />-1 LM2596 : Abaisseur de tension avec affichage.<br />-Double ventilateur de récupérations alimentés par USB.<br />-1 GY-521 MPU6050 : Accéléromètre et gyroscope.<br />-Caméra Raspberry Pi V2.1<br />-Système d'exploitation de la Raspberry : Raspbian Stretch.<br />-1 chargeur sur secteur 5V de 3A : Pour la Raspberry.<br />-1 chargeur sur secteur 12V de 2A : Pour alimenter directement l'Arduino et l'abaisseur de tension pour les moteurs.</p>
	</section>


	<section id="Bonus">
		<div class="titre">
			<hr><h2>Bonus</h2><hr>
		</div>
		<h2 id="DuinoExtra"><i>Avant de partir.....Duino sous d'autres coutures....</i></h2>

		<div class="ligne1">
			<img class="photoDuino3" src="assets/images/DuinoExtra/plastic1.jpg" alt="">						
			<img class="photoDuino3" src="assets/images/DuinoExtra/plastic3.jpg" alt="">
		</div>

		<div class="ligne1">					
			<img class="photoDuino" src="assets/images/DuinoExtra/plastic2.jpg" alt="">
			<img class="photoDuino" src="assets/images/DuinoExtra/boite.jpg" alt="">
		</div>

		<div class="ligne1">
			<img class="photoDuino4" src="assets/images/DuinoExtra/carton2.jpg" alt="">
			<img class="photoDuino4" src="assets/images/DuinoExtra/carton1.jpg" alt="">	
		</div>
	</section>

	<footer id="footer">
		<p>Mentions légales</p>
		<a href="https://www.linkedin.com/feed/?trk=guest_job_search_nav-header-signin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		<a href="https://github.com/Duino25000/Portfolio" target="_blank"><i class="fab fa-github"></i></a>
	</footer>
<!--*********************************************************************************************-->
</body>
</html>