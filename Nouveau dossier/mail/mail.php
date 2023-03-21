<?php
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = Mailgun::create('5f5c69904a139acce3e7fe8b663cb98a-713d4f73-5a617e5e');
$domain = "sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org>',
	'to'	=> 'Baz <rekhichem@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));