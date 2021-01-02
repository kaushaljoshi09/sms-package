<?php

namespace Kaushal\Twilio;
use Twilio\Rest\Client;

class TwilioApi
{
    public function __construct($phoneNumber = null , $message = null) {
        $account_sid   = getenv("TWILIO_SID");
        $auth_token    = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client        = new Client($account_sid, $auth_token);
        try {
            // Use the client to do fun stuff like send text messages!
            $client->messages->create($phoneNumber,array('from' => $twilio_number, 'body' => $message));
            return true;
        } catch (Exception $e) {
            return  "Error: " . $e->getMessage();
        }
    }
}