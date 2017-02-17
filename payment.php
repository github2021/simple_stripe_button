<?php 

require ("config.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Stripe Button</title>
</head>
<body>

<?php //<form <?php echo "action='charge.php?price=" . $price . "&email=". $email ."&custom=" . $custom . "'";?x> method='POST'> ?>
<form action='charge.php?price=<?php echo $price; ?>' method='POST'>
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $stripe['publishable_key']; ?>"
    data-description="Deluxe Advertisement"
    data-amount="<?php echo $price;?>"	
	<?php //data-description="Card Required"?>
	data-name="Purchase" 
	<?php //data-image="https://stripe.com/img/documentation/checkout/marketplace.png"?>
	data-currency= "EUR" <?php //"CNY"?>
	<?php //stripeEmail="fddkjf@jfdkj.com?>
	<?php //data-panel-label ="I Agree {{amount}} Monthly"?><?php // Monthly" ?>
	data-label = "Place my Ad"
	<?php //data-panel-label ="Subscribe"?>
	<?php //data-panel-label ="After trial pay {{amount}}"?>
	data-allow-remember-me = "false"
	<?php //data-shipping-address = "true" ?>
	<?php //data-billing-address = "true" ?>
	data-zip-code = "false"
	data-email="<?php echo $email;?>"
	>
  </script>
  <input type="hidden" name="custom_field" value="custom_field">
</form>


<div>
Credit Card Number: 4111 1111 1111 1111
</div>




</body>
</html>