<?php
session_start();
require_once('vendor/autoload.php');
require_once('config.php');

$session_id = $_GET['return_id'];
$session = \Stripe\Checkout\Session::retrieve($session_id);

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
?>