<?php
$from = "+19205414589";
require'twilio-php/Services/Twilio.php';
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACe29c8d760d7c46ce87cd20fc762752d0";
$AuthToken = "5d2c7c091b87974ec87e702bc2166091";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $people = array(
        "+19206912492" => "JasonSlocum",
    );
 
    // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
         //   "920-541-4589", 
 
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
            "Hey $name, Monkey Party at 6PM. Bring Bananas!"
        );
 
        // Display a confirmation message on the screen
        echo "Sent message to $name";
    }
