<?php
session_start();
require_once('vendor/autoload.php');
require_once('config.php');


$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'usd',
        'unit_amount' => 1000,
        'product_data' => [
          'name' => 'Web Developer',
          'description' => 'Testing as a Web Developer!',
          'images' => ['https://d1wqzb5bdbcre6.cloudfront.net/39df46e0df4744a5a17b20447ddb6d872e264847ac1eb9f2028924cc27272455/68747470733a2f2f66696c65732e7374726970652e636f6d2f6c696e6b732f4d44423859574e6a644638785457523664585644613359796545524c536e564366475a7358327870646d56665a5446445747357057564e71515531335430704e53324e324f45565156557778303044345551494d506a'],
        ],
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'http://localhost/emeraldtechsolutions/payments/stripe/processing.php?return_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => 'http://localhost/emeraldtechsolutions/payments/stripe/cancel.php?return_id={CHECKOUT_SESSION_ID}', 
     ]);
     ?>
<script src="https://js.stripe.com/v3/"></script>

<script type="text/javascript">
     var stripe = Stripe("<?php echo $publishable_key; ?>");
     var session = "<?php echo $checkout_session['id']; ?>";
          stripe.redirectToCheckout({ sessionId: session })
                  .then(function(result) {
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function(error) {
          console.error('Error:', error);
        });          
  </script>

