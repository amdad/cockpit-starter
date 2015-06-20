<?php
require('cockpit/bootstrap.php');

$app = new Lime\App();

$baseVars = [
	'pageTitle' => 'Page Title'

];

// bind routes
$app->bind("/", function() use($app, $baseVars) {

	return $app->render('views/home.php with template/template.php', array_merge($baseVars, [

	]));
});




$app->run();

