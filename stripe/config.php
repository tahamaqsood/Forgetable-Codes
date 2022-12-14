<?php 
require ('stripe-php-master/init.php');
$publishable_key = "{{PUBLISHABLE KEY}}";
$secret_key = "{{SECRET KEY}}";

\Stripe\Stripe::setApiKey($secret_key);
?>