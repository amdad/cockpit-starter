<?php

$config = [
	'pageTitle' => 'Page Title',
	'siteName' => get_registry('siteName' ['Site Name']),
	'lang' => get_registry('lang' ['en-US']),
	'cockpitApi' => get_registry('apiToken' ['NONE']),
	'currentRoute' => $app->retrieve('route', '')

];