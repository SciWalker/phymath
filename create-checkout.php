<?php
require_once 'vendor/autoload.php'; // Install Stripe PHP SDK via Composer
\Stripe\Stripe::setApiKey('YOUR_STRIPE_SECRET_KEY');

header('Content-Type: application/json');
$email = $_POST['email'];

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price' => 'YOUR_PRICE_ID', // e.g., price_1J5...
        'quantity' => 1,
    ]],
    'mode' => 'subscription',
    'customer_email' => $email,
    'success_url' => 'https://yourdomain.com/success.php',
    'cancel_url' => 'https://yourdomain.com/cancel.php',
]);

echo json_encode(['id' => $checkout_session->id]);
?>

