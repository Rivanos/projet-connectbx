<?php

class LoginController{
	
	public function __construct(){
		
	}
	
	public function run(){
		# Si un distrait écrit ?action=login en étant déjà authentifié
		if (!empty($_SESSION['authentifie'])) {
			header("Location: index.php?action=home"); # redirection HTTP vers l'action login
			die();
		}	
		
		$notification="";
		
		if (empty($_POST)) {
			# L'utilisateur doit remplir le formulaire
			$notification='Authentifiez-vous';
		} elseif ((htmlentities($_POST['user'])!='admin' || htmlentities($_POST['password'])!='mdp')) {
			# L'authentification n'est pas correcte
			$notification='Vos données d\'authentification ne sont pas correctes.';
		} else {
			# L'utilisateur est bien authentifié
			# Une variable de session $_SESSION['authenticated'] est créée
			$_SESSION['authentifie'] = 'autorise';
			$_SESSION['login'] = $_POST['nomdutilisateur'];
			# Redirection HTTP pour demander la page admin
			header("Location: index.php?action=admin");
			die();
		}
		
		require_once (VIEWS . 'login.php');
		
	}
	
}