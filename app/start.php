<?php

require 'vendor/autoload.php';

define('SITE_URL', 'http://localhost:83/payPal/PayForSomething');

$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokencredential(
		'AUb99sBdn3KljOoUvno3RXKWcdcu4iWys-w-a8y1xZss1hFaMEFBE2xyeslct0lEGh_LCnDj72JrELvt', // Client Id
		'EOGhvXA1-DaQPdl2CUAuxzIZyG8TcL8mFTmufddPvF65y5Kwl-NqCLJkdKuKJm5zR23qA_njrmarlxOv'  // Secret
	)
);