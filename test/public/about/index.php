<?php
	require 'D:/wagon/uwamp/www/test/bootstrap/autoload.php';
	$app = require_once 'D:/wagon/uwamp/www/test/bootstrap/app.php';
	$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

	$response = $kernel->handle(
	    $request = Illuminate\Http\Request::capture()
	);

	$response->send();

	$kernel->terminate($request, $response);
?>