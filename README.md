# Twilio API Custome Package

## This will send sms to user


## Steps


1.  `composer require kaushal/twilio`
2.  `composer dump-autoload`
3.  `Write your twilio credential in env like "TWILIO_SID=xxxxxxx","TWILIO_AUTH_TOKEN=xxxxxx", "TWILIO_NUMBER=xxxxxx"`
4.  `Use the package name in controller like "use use Kaushal\Twilio\TwilioApi;"`
5.  `When you pass the number make sure you pass it with country code`
5.  `Pass phonenumber & msg in this manner to the package name like "new TwilioApi($phonnumber, $msg)"`