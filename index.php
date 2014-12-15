<?php



	// require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
	
	\Slim\Slim::registerAutoloader();
	
	$app = new \Slim\Slim([
	
		'templates.path' => 'vue/lib'
	
	]);
	
	require 'modele/connexion_PDO.php';
	
	$app->get('/', function() use ($app){
	
		$app->render('../../controller/controllerHome.php');
	
	});
	
	$app->get('/connexion', function() use ($app){
	
		$app->render('Connexion.php');
	
	});
	
	$app->get('/inscription', function() use ($app){
	
		$app->render('Inscription.php');
	
	});
	
	$app->get('/:pseudo', function($pseudo) use ($app){
	
		$sql = "SELECT Pseudo FROM user";
	
		$app->render('../../controller/ControllerProfil.php', array('pseudo'=>$pseudo));
	
	})->name('contact')->conditions(['name' => '[a-zA-Z0-9]*']);
	
	
	
	$app->get('/:pseudo/:city', function($pseudo, $City) use ($app){
	
		$sql = "SELECT Pseudo FROM user";
	
		$app->render('../../controller/controllerCity.php', array('pseudo'=>$pseudo), array('city'=>$City);
	
	})->name('contact')->conditions(['name' => '[a-zA-Z0-9]*']);

	
	$app->render('header.php', compact('app'));
	$app->run();
	$app->render('footer.php',  compact('app'));
?>