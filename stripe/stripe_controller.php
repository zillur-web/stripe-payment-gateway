<?php
	require_once('vendor/autoload.php');

	$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);



	\Stripe\Stripe::setApiKey('sk_test_51LmNs0Kqui52IWUSRVsiwrDdVBML5XagCafzso2xydRm17uhe2B25TT4On3O43rKtVqNYlc6Lnm27d21xWRuKp5r00RA2K6mmN');

	$charge = \Stripe\Charge::create([
		'source' => $POST['stripeToken'],
		'description' => "10 cucumbers from Roger's Farm",
		'amount' => 2000,
		'currency' => 'usd',
	]);

	echo '<pre>';
	print_r($charge);
?>