<?php
require 'config.php';

$checkout_session = \Stripe\Checkout\Session::create([
  // 'payment_method_types' => ['card','ideal'],
  'payment_method_types' => [$PAYMENT_METHOD_TYPE],
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price_data' => [
    	'currency' => $STRIPE_CURRENCY,
    	'unit_amount' => 10000,
    	'product_data' => [
    		'name' => 'Order Id: #55454545',
    		'description' => 'Evna Order payment',
  			"metadata" => ["order_id" => "6735"]
    	],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => STRIPE_SUCCESS_URL,
  'cancel_url' => STRIPE_CANCEL_URL,
]);



?>


<script src="https://js.stripe.com/v3/"></script>
<script>
  var stripe = Stripe('<?php echo STRIPE_ID;?>');
  var sessionId = "<?php echo $checkout_session['id'];?>";


  
  stripe.redirectToCheckout({
    // Make the id field from the Checkout Session creation API response
    // available to this file, so you can provide it as argument here
    // instead of the {{CHECKOUT_SESSION_ID}} placeholder.
    sessionId: sessionId,
  }).then(function (result) {
    // If `redirectToCheckout` fails due to a browser or network
    // error, display the localized error message to your customer
    // using `result.error.message`.
  });

  
</script>

<?php

// $_SESSION['response_data'] = $checkout_session;
// header("HTTP/1.1 303 See Other");
// header("Location: " . $checkout_session->url);
?>