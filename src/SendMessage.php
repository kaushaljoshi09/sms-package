<?php

namespace Kaushal\Sms;
use Twilio\Rest\Client;

class SendMessage
{
    public function __construct($phoneNumber , $message) {
        if (!empty($phoneNumber) && !empty($message)) {
            $account_sid   = getenv("TWILIO_SID");
            $auth_token    = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $client        = new Client($account_sid, $auth_token);
            try {
                $client->messages->create($phoneNumber,array('from' => $twilio_number, 'body' => $message));
                return true;
            } catch (Exception $e) {
                return  "Error: " . $e->getMessage();
            }
        } else {
            return false;
        }
    }
}