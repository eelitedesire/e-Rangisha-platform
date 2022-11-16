<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once '/path/to/vendor/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "AC539a7d428740126d22bdc8ff9fa5a33e"; 
$token  = "[AuthToken]"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+250785999950", // to 
                           array(  
                               "messagingServiceSid" => "MG3862e03cd9e1a2065150e6ad912a145d",      
                               "body" => "Hello Test" 
                           ) 
                  ); 
 
print($message->sid);

{
    "body": "Hello Test",
    "num_segments": "0",
    "direction": "outbound-api",
    "from": null,
    "date_updated": "Sun, 04 Sep 2022 10:05:27 +0000",
    "price": null,
    "error_message": null,
    "uri": "/2010-04-01/Accounts/AC539a7d428740126d22bdc8ff9fa5a33e/Messages/SM0aa15d6386434657bd8bb5123ad83211.json",
    "account_sid": "AC539a7d428740126d22bdc8ff9fa5a33e",
    "num_media": "0",
    "to": "+250785999950",
    "date_created": "Sun, 04 Sep 2022 10:05:27 +0000",
    "status": "accepted",
    "sid": "SM0aa15d6386434657bd8bb5123ad83211",
    "date_sent": null,
    "messaging_service_sid": "MG3862e03cd9e1a2065150e6ad912a145d",
    "error_code": null,
    "price_unit": null,
    "api_version": "2010-04-01",
    "subresource_uris": {
        "media": "/2010-04-01/Accounts/AC539a7d428740126d22bdc8ff9fa5a33e/Messages/SM0aa15d6386434657bd8bb5123ad83211/Media.json"
    }
}