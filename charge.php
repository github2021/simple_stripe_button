<?php require ("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href=http://getbootstrap.com/dist/css/bootstrap.min.css rel=stylesheet>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $error = false;

  try {

    if (!isset($_POST['stripeToken'])) throw new Exception("The Stripe Token was not generated correctly");

    $charge = \Stripe\Charge::create(array(
      'source'     => $_POST['stripeToken'],
      'amount'   => $_GET['price'],
      'currency' => 'eur'
    ));

  } catch (Exception $e) {
    $error = $e->getMessage();
  }

  if (!$error) {

    ?>

<div class="alert alert-success" role="alert">
    <a href="#" class="alert-link">Thanks! your payment has been processed</a>
</div>


<?php

  }
  else { ?>


<div class="alert alert-warning" role="alert">
  <a href="#" class="alert-link"><?php echo $error; ?></a>
</div>

<?php    
    require_once('payment.php');
  }
}

?>

</body>
</html>
