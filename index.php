<?php

if (empty($_SERVER['SERVER_NAME'])) {
	// Make sure Kirby doesn't default to outputting IP URLs.
	$_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'];
}

require 'kirby/bootstrap.php';

echo (new Kirby)->render();
