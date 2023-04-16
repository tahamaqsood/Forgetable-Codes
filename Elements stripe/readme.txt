
Step 1. 
Download the required library. 
Use terminal to download library.
Type this in terminal: composer require stripe/stripe-php

Step 2. 
Create a new file for configuration. name it config.php

Step 3.
Once the config file is created. make 2 variables for api keys.

require_once('vendor/autoload.php');
Include the autoload file which can fe found in the vendors directory.

$publishable_key = "";
$secret_key = "";
Both can be found in the stripe dashboard.

\Stripe\Stripe::setApiKey($secret_key);
Define your secret key to library and create instance. 

Step 4.
Now create a checkout file to make provide payment details and create token to redirect page to stripe element.

Include the autoload file and config file to get apikey and start a session.
session_start();
require_once('vendor/autoload.php');
require_once('config.php');


Create checkout session and provide all the payment details, successful payment url and unsuccessful payment url.
$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'unit_amount' => 1000,
        'product_data' => [
          'name' => 'Web Developer',
          'description' => 'Testing as a Web Developer!',
          'images' => ['Include_here_the_picture_you_want_to_show_on_stripe_page'],
        ],
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'Define_here_the_location_of_the_successful_payment_with_checkout_session_ID/////processing.php?return_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'Define_here_the_location_of_the_unsuccessful_payment_with_checkout_session_ID////index.php?return_id={CHECKOUT_SESSION_ID}', 
     ]);

Include the stripe js
<script src="https://js.stripe.com/v3/"></script>

Now open an script tag in which you will redirect the details to stripe element. Define the variable of publishable key you have created on the config page.
 <script type="text/javascript">
     var stripe = Stripe("<?php echo $publishable_key; ?>");
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          // If `redirectToCheckout` fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using `error.message`.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          



  </script>






Step 5. 
Create a new file of processing.php to retrevie the data of the successful payment.

Include the autoload file and config file to get apikey and start a session.
session_start();
require_once('vendor/autoload.php');
require_once('config.php');


Get return id from the url.
$session_id = $_GET['return_id'];


Create new function of stripe retrevie data
$session = \Stripe\Checkout\Session::retrieve($session_id);

echo or store the data accordingly.
            $amount = $session['amount_total']/100; 
            $name = $session['customer_details']->name;
            $email = $session['customer_details']->email;
            $country = $session['customer_details']->address->country;
            $currency = $session['currency'];
            $payment_status = $session['payment_status'];
            $status = $session['status'];

            echo "<pre>";
            print_r($session);
            echo "<pre>";


You're done!
