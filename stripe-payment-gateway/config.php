<?php
	require 'vendor/autoload.php';

	// define('DB_HOSTNAME', 'localhost');
	// define('DB_USERNAME', 'root');
	// define('DB_PASSWORD', '');
	// define('DB_NAME', 'databse name');

 //    // Connect with the database
 //    $db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME); 

 //    if ($db->connect_errno) {
 //        die("Connect failed: ". $db->connect_error);
 //    }

    // YOUR_DOMAIN
    $YOUR_DOMAIN = 'http://localhost/stripe-payment-gateway';
    // set your currency here defalt
    $STRIPE_CURRENCY = 'usd';
    // payment_method_types using array
    $PAYMENT_METHOD_TYPE = 'card';
    // STRIPE_ID
    define('STRIPE_ID', 'pk_test_51LmNs0Kqui52IWUSDHxYlTSmWkLcR2v4y3zqVd29kZtXlVVifcmKGxUKUpoZtbKaTt0d7vhmOK0tcNb0pPzGXEiP00Vs8xDk4g');
    // STRIPE_SECRET
    define('STRIPE_SECRET', 'sk_test_51LmNs0Kqui52IWUSRVsiwrDdVBML5XagCafzso2xydRm17uhe2B25TT4On3O43rKtVqNYlc6Lnm27d21xWRuKp5r00RA2K6mmN');
    
    define('STRIPE_SUCCESS_URL', $YOUR_DOMAIN.'/success.php?session_id={CHECKOUT_SESSION_ID}');
    define('STRIPE_CANCEL_URL', $YOUR_DOMAIN.'/cancel.php');

    // This is your test secret API key.
	\Stripe\Stripe::setApiKey(STRIPE_SECRET);

?>