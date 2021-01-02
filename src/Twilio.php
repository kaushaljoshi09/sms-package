<?php

namespace Kaushal\Twilio;
use Twilio\Rest\Client;

class Twilio
{
    /**
     *
     * @var object
     */
    protected $token;

    /**
     * Create a new helper instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function sendMessage($phoneNumber, $message)
    { 
        try {
            $account_sid   = getenv("TWILIO_SID");
            $auth_token    = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");
            $client        = new Client($account_sid, $auth_token);
            $client->messages->create($phoneNumber, ['from' => $twilio_number, 'body' => $message] );
            return $client;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}