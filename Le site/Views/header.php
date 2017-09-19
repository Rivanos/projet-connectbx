<!DOCTYPE HTML>
<html>
<head>
    <title>ConnectBX</title>
    <link rel="stylesheet" type="text/css" href="<?php echo VIEWS;?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo VIEWS;?>css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


</head>
<body>
    <header id="header">
        <nav id="menu-nav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/public/projet-client-connectbx/Le%20site/home">
                            <img alt="logo" src="<?php echo VIEWS;?>Images/logo-01.png" height="35px" id="logo-navbar">
                        </a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-left" id="searchNavBar">
                        <div class="form-group">
                            <input type="text" id="recherche" class="form-control" placeholder="Rechercher l'association..." autocomplete="off">
                        </div>
                        <div id="resultat">
                            <?php

                            include 'searchview.php';

                            ?>
                        </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
					<li><a href="home">Accueil</a></li> <!-- index.php?action=home -->
					<li><a href="admin">Administration</a></li> <!-- index.php?action=admin -->
          <li><a href="contact">Contact</a></li> <!-- index.php?action=contact -->
          <li><a href="event">Evenement</a></li>
          <li><a href="aPropos">A propos</a></li> <!-- index.php?action=aPropos -->
          <li><a href="map">Map</a></li> <!-- index.php?action=map -->
					<!-- Rajouter le lien vers votre page ici -->
					<!-- ex: <li><a href="index.php?action=(le nom que vous voulez)">(Le contenu de la balise a)</a></li> -->
					<?php if(!empty($_SESSION['authentifie'])){?>
					<li><a href="logout">Déconnexion</a></li>
					<?php }?>
				</ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
		</header>

