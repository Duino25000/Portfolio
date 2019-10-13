<!--   -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/SASS/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta name="description" content="Rassemble mes connaissances dans le Web. Portfolio." />
	<title>Histoire du site</title>
</head>

<body>
<!--*********************************** HEADER *****************************************-->
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Retour acceuil</i></a></li>
				<li><a href="#siteTXT1">Description</a></li>
				<li><a href="#siteTXT2">Technologie utilisées</a></li>
				<li><a href="#siteTXT3">Améliorations</a></li>
				<li><a href="#siteTXT4">Mises à jours</a></li>
				<li class="dernierLI"><a href="#siteTXT5">Sondages</a></li>
			</ul>
		</nav>
	
		<img id="fondHeader" src="assets/images/web5.jpg" alt="slider">
		<div id="boiteTitre">
			<div id="titreMoi">
			<p><span>Dubel Sébastien</span><br />Développeur Web junior</p>
			</div>
		</div>
	</header>
<!--************************************** DESCRIPTION *********************************************-->
	<section id="siteTXT1">
		<div class="titre">
			<hr><h2>Description</h2><hr>
		</div>
		<img class="imageProjet" src="assets/images/logoHTML_CSS.jpg" alt="image site blueasy">
		 <p>Je ne me dit pas développeur web, je suis un simple débutant. J'ai réalisé ce portfolio sans aucune prétention, juste pour me donner un but, un projet à faire évoluer comme le projet Duino pour progresser en Python3. Un endroit ou je rassemble mes différentes créations réalisées dans le cadre de formation professionel ou de façon autodidacte. Je viendrais l'enrichire avec de nouveaux contenus au fur et à mesure de mes nouvelles connaissances.</p>
	</section>
<!--****************************************** TECHNOLOGIE ****************************************************-->
	<section id="siteTXT2">

		<div class="titre">
			<hr><h2>Technologie utilisées</h2><hr>
		</div>

		<div id="boxTXT2">

			<img class="imageProjet" src="assets/images/code.jpg" alt="image site blueasy">
		
			<div id="boxDroiteTXT2">
				<span>Site réalisé avec :</span>
				<ul>
					<li><i class="fab fa-html5"></i><p>HTML 5</p></li>
					<li><i class="fab fa-sass"></i><p>SASS</p></li>
					<li><i class="fab fa-js"></i><p>JavaScript</p></li>
					<li><i class="fab fa-php"></i><p>PHP 7.3.3</p></li>
					<li><i class="fas fa-box-open"></i><p>Composer 1.9.0</p></li>
					<li><i class="far fa-envelope-open"></i><p>PHPMailer</p></li>
					<li><i class="fab fa-font-awesome-flag"></i><p>CDN Font Awesome</p></li>
					<li><i class="fas fa-database"></i><p>MySQL 5.7</p></li>
				</ul>
		</div>
		<!-- <p>Aucuns autres langages ni Framework n'a été utilisés. Respect des normes W3C. Gestion du responsive design avec Flexbox et Media queries (3 breakpoints).</p> -->
	</section>
<!--********************************************* AMELIORATION *****************************************************************-->
	<section id="siteTXT3">
		<div class="titre">
			<hr><h2>Améliorations</h2><hr>
		</div>
		<img class="imageProjet" src="assets/images/SchemaRequetteHttp.png" alt="image site blueasy">
		<p>Des sondages/questionnaires, la listes des mises à jours seront ajoutés regulierement ainsi que l'historique des anciennes versions du site. Si vous avez des questions, des suggestions ou simplement pour me donner votre avis qui m'aidera beaucoup, n'hésitez pas envoyez un message dans la rebrique "Contact" de la page d'accueil ou en bas de page.</p>
	</section>
<!--********************************************** MISES A JOURS  ****************************************************************-->
	<section id="siteTXT4">
		<div class="titre">
			<hr><h2>Mises à jours</h2><hr>
		</div>

		<div id="blockMAJ">
			<h3>Liste des mises à jours</h3>
			<ul>
				<li><span class="dateMAJ">06/10/2019</span><p>Mise en place du formulaire de contact, ajout du fichier sitemap.xml et la de la page mention légale.</p></li>
				<li><span class="dateMAJ">07/10/2019</span><p>Ajout du responsive design du site Ski.</p></li>
				<li><span class="dateMAJ">09/10/2019</span><p>Modification de la page ceSite des projets perso. Ajout du sondage.</p></li>
			<!-- 	<li><span class="dateMAJ"></span><p></p></li>
				<li><span class="dateMAJ"></span><p></p></li> -->
			</ul>
		</div>
	
		
	</section>
<!--****************************************** SONDAGE *************************************************************************-->
	<section id="siteTXT5">
		<div class="titre">
			<hr><h2>Sondage</h2><hr>
		</div>

		<div id="sondageFormulaire">
			<form method="post">

		 		<h4>Me connaissez-vous personellement ?</h4>
                <div id="radioConnaissance" class="radio">
                    <input type="radio" id="ouiConnaissance" name="connaissance" value="Oui" checked>
                    <label for="ouiConnaissance"><span>Oui</span></label>
                    <input type="radio" id="nonConnaissance" name="connaissance" value="Non">
                    <label for="nonConnaissance"><span>Non</span></label>
                </div>

                <h4>Comment jugez-vous votre niveau en programmation ?</h4>
                <div id="radioInformatique" class="radio">
                	<div class="inputLabel">
                    	<input type="radio" id="basInformatique" name="informatique" value="Bas" checked>
                    	<label for="basInformatique"><span>Je n'y comprend rien</span></label>
                    </div>

                    <div class="inputLabel">
                    	<input type="radio" id="moyenInformatique" name="informatique" value="Moyen">
                    	<label for="moyenInformatique"><span>Je me débrouille</span></label>
                    </div>

                    <div class="inputLabel">
                    	<input type="radio" id="hautInformatique" name="informatique" value="Haut">
                    	<label for="hautInformatique"><span>Je maitrise</span></label>
                    </div>
                </div>

                <h4>Trouvez-vous la navigation sur le site intuitive ?</h4>
                <div id="radioIntuitive" class="radio">

                	<div class="inputLabel">
                    	<input type="radio" id="ouiIntuitive" name="intuitive" value="Bonne" checked>
                    	<label for="ouiIntuitive"><span>Oui</span></label>
                    </div>

                    <div class="inputLabel">
                    	<input type="radio" id="nonIntuitive" name="intuitive" value="Mauvaise">
                    	<label for="nonIntuitive"><span>Non</span></label>
                    </div>

                    <div class="inputLabel">
                    	<input type="radio" id="bofIntuitive" name="intuitive" value="Moyenne">
                    	<label for="bofIntuitive"><span>Je ne savait plus trop ou j'était !</span></label>
                    </div>

                </div>

                <div id="btnSondage" onclick="sondage()" >ENVOYER</div>
                <p>Si vous avez des précisions, des idées ou toutes autres remarques à apporter, n'héitez pas envoyez un message via le formulaire de la page acceuil.<br />Ou allez sur contact en bas de page.</p>
                
                 
			</form>
		
		</div>
	</section>
<!--******************************************* FOOTER ****************************************************************************-->
	<footer id="footerBorderTop">
		<a href="index.php#Sectioncontact"><p>Contact</p></a>
		<a href="mention.html" target="_blank" title="Voir les mentions légales (ouvre un nouvel onglet)"><p>Mentions légales</p></a>
		<a href="https://www.linkedin.com/feed/?trk=guest_job_search_nav-header-signin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
		<a href="https://github.com/Duino25000/Portfolio" target="_blank"><i class="fab fa-github"></i></a>
	</footer>
<!--*********************************************************************************************-->
<script src="assets/scripts/script.js"></script>
</body>
</html>