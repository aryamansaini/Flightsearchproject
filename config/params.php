<?php

$params = [
	// set target language
	'language' => 'en-US',
	// set source language
	'sourceLanguage' => 'en-US',
    'params'=>[
		'apiToken' => '', // Token https://www.travelpayouts.com/programs/100/tools/api
		'apiMarker' => '',  // Marker https://www.travelpayouts.com/programs/100/tools/api
		'apiResponseLang' => 'en', // Response language : en,ru,de,es,fr,it,pl,th.
		'title' => 'TravelPayouts sample app', // Title of your app
		'baseUrl' => '' // Path of your app (for example: if your project url is http//site.com/flight set 'baseUrl'=> '/flights', if it in root directory set 'baseUrl'=> '/'
	]
];

// Don't change anything below this line
$localParamsPath = __DIR__ . DIRECTORY_SEPARATOR . 'params_local.php';
if (file_exists($localParamsPath))
    $params = array_merge($params, require($localParamsPath));

return $params;
