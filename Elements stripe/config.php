<?php
require_once('vendor/autoload.php');

$publishable_key = "pk_test_51MEe3aFcGkT8Xof2STqDU649YkK4o8gEKrEfG5ingHXOhwn2GRxXsMEMephMeJvlzyGLw4koOiqzRw8ww6tGnOkO00ThFpARtO";
$secret_key = "sk_test_51MEe3aFcGkT8Xof2vPFBQnWF6JaqWodUQCVazKbybXemsPd91v8ESwdgoDZQ3zbjQcdUMPHjsl7Taezpl4ZjeOUt00yv8KLJOd";


\Stripe\Stripe::setApiKey($secret_key);
