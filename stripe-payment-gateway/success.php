<?php
	require 'config.php';
  

	$session_id = $_GET['session_id'];
	$session = \Stripe\Checkout\Session::retrieve($session_id);

	$payment_details = \Stripe\PaymentIntent::retrieve($session['payment_intent']);

	echo '<pre>';
	print_r($payment_details);
?>


