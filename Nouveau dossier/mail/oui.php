<?php

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';

use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = Mailgun::create('5f5c69904a139acce3e7fe8b663cb98a-713d4f73-5a617e5e', 'https://api.mailgun.net/v3/sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org');
$domain = "sandbox529e0b67c3fe4b689b4411ad6bf3af61.mailgun.org";
$params = array(
  'from'    => 'Excited User <app158500329@heroku.com>',
  'to'      => 'rekouanehichem@gmail.com',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
);

# Make the call to the client.
$mg->messages()->send($domain, $params);
