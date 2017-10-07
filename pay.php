<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if (!isset($_GET['success'], $_GET['paymentId'], $_GET['PayerID'])) {
	die();
}

if ((bool)$_GET['success'] === false) {
	die();
}

$paymentId = $_GET['paymentId'];
$payerID = $_GET['PayerID'];

$payment = Payment::get($paymentId, $paypal);

$execute = new PaymentExecution();
$execute->setpayerId($payerID);

try {
	$result = $payment->execute($execute, $paypal);
} catch (Exception $e) {
	$data = json_decode($e->getData());
	?>
		<div class="alert alert-danger"><?php echo $data->message;?></div>
		<a href="http://localhost:83/payPal/PayForSomething/index.php" class="btn btn-primary" target="_self">Go Back</a>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php
	die();
}

?>

<div class="alert alert-success">Payment made. Thanks!</div>

<a href="http://localhost:83/payPal/PayForSomething/index.php" class="btn btn-primary" target="_self">Go Back</a>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

