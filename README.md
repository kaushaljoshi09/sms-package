# Twilio API Custome Package

## This will send sms to user


## Steps


1.  `composer require kaushal/twilio`
2.  `Add the service "Kaushal\Twilio\TwilioServiceProvider::class" provider path in app/config/app.php`
3.  `composer dump-autoload`
4. `Write your twilio credential in env like "TWILIO_SID=xxxxxxx","TWILIO_AUTH_TOKEN=xxxxxx", "TWILIO_NUMBER=xxxxxx"`
5. `Use the package name in controller like "use Kaushal/Twilio"`
6. `Pass phonenumber & msg in this manner to the package name like "new Twilio($phonnumber, $msg)"`