<?php 

require_once('stripe/init.php');


$stripe = array(
  'secret_key'      => 'YOUR_SECRET_KEY',
  'publishable_key' => 'YOUR_PUBLISHABLE_KEY'
);


\Stripe\Stripe::setApiKey($stripe['secret_key']);

$price = "99500";
$email = "test@test.com";
$custom = "custom_field";

?>