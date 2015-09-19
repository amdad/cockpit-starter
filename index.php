<?php
// make cockpit api available
require('admin/bootstrap.php');

$app = new Lime\App();
$app->path('template', __DIR__ . '/template');
$app->path('views', __DIR__ . '/views');

require('config.php');

// bind routes
$app->bind("/", function() use($app, $config) {

	return $app->render('views:home.php with template:template.php', array_merge($config, [

	]));
});


// handle error pages
$app->on("after", function() use ($app, $baseVars) {
	switch ($app->response->status) {
		case 404:
			if ($app->req_is('ajax')) {
				$app->response->body = '{"error": "404", "message":"File not found"}';
			} else {
				$app->response->body = $app->render('views:error/404.php with template:template.php',  $baseVars);
			}
			break;
	}
});

$app->run();

