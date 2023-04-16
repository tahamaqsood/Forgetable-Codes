<?php
require_once('vendor/autoload.php');

$publishable_key = "TEST_KEY";
$secret_key = "TEST_KEY";


\Stripe\Stripe::setApiKey($secret_key);
