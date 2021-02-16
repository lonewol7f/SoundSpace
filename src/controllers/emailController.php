<?php

define('EMAIL',"Your Email Here");
define('PASSWORD',"Password Here");

require_once (ROOT_PATH . '/vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))    //within brackets >> host, port, encryption
    // if want to share this project remove user name and password from here
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);



function sendWelcomeEmail($user)
{
    global $mailer;
    $email = $user['email'];
    $fname = $user['fname'];

    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>New User</title>
    </head>
    <body>
        <div class="wrapper" style="text-align:center;">
            <h2>Welcome to SoundSpace ' . $fname . '</h2>

            
        </div>
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('New User Registerd!!!'))
    ->setFrom(EMAIL)
    ->setTo($email)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
}

function sendPassReset($user)
{
    global $mailer;
    $email = $user['email'];
    $fname = $user['fname'];
    $token = $user['token'];

    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Password Reset</title>
    </head>
    <body>
        <div class="wrapper" style="text-align:center;">
            <p>
                Hello ' . $fname . '
            
                Please click on the link below to reset your password.
            </p>
            <p>
                <a href="http://localhost/project/index.php?password-token=' . $token . '">Reset your password</a>
            </p>

            
        </div>
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Password Reset'))
    ->setFrom(EMAIL)
    ->setTo($email)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
}

function sendPaymentDetails($user)
{
    global $mailer;
    $email = $user['email'];
    $fname = $user['fname'];
    $item = $user['iName'];
    $price = $user['price'];


    $body ='<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Password Reset</title>
    </head>
    <body>
        <div class="wrapper" style="text-align:center;">
            <p>
                Hello ' . $fname . '
            
                Thanks for the purchase. Stay with us.
            </p>
            <p><u>Item Details</u></p>
            <p>Item Name : ' . $item . '</P>
            <p>Item Price: ' . $price . '</p>
            <p>
                <a href="http://localhost/project/src/rate.php">Rate Us</a>
            </p>

            
        </div>
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('ORDER CONFIRMATION'))
    ->setFrom(EMAIL)
    ->setTo($email)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
}

?>