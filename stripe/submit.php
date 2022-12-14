<?php 
require("config.php"); 
if(isset($_POST['stripeToken'])){
\Stripe\Stripe::setVerifySslCerts(false);
$token = $_POST['stripeToken'];

$data=\Stripe\Charge::create(array(
    "amount"=>5000,
    "currency"=>"usd",
    "description"=>"",
    "source"=>$token,
));

if(isset($_POST['name'])){
    header("location:http://localhost/mad%20alpha/stripe/index.php?success_url=1");
}
echo "<pre>";
print_r($data);
}
?>