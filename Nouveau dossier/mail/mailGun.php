<?php

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('e92dfe644c0f39b86826f62b9a028a61-713d4f73-9b1cf1f1');
$domain = "sandbox529e0b67c3fe4b689b4411ad6bf3af61.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
	array('from'    => 'Mailgun Sandbox <postmaster@sandbox529e0b67c3fe4b689b4411ad6bf3af61.mailgun.org>',
		  'to'      => 'Hichem Rekouane <rekouanehichem@gmail.com>',
		  'subject' => 'Hello Hichem Rekouane',
		  'text'    => 'Congratulations Hichem Rekouane, you just sent an email with Mailgun!  You are truly awesome! '));

// You can see a record of this email in your logs: https://app.mailgun.com/app/logs.

// You can send up to 300 emails/day from this sandbox server.
// Next, you should add your own domain so you can send 10000 emails/month for free.

