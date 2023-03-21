<?php

namespace App\Http\Controllers;

use App\Mail\HelloMailGun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mailgun\Mailgun;

class MailController extends Controller
{
    public function index(){
        /*echo(Mail::to("rekhichem@gmail.com")->send(new HelloMailGun()));
        return "hi";*/
        /*
        $mgClient = Mailgun::create('5f5c69904a139acce3e7fe8b663cb98a-713d4f73-5a617e5e');
        $domain = "sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org";
        # Make the call to the client.
        $result = $mgClient->messages()->send($domain, [
	        'from'	=> 'Fennec Airlines <mailgun@sandbox72145a33811b45ed9d7bb28daabde69d.mailgun.org>',
	        'to'	=> 'Hichem Rekouane <rekhichem@gmail.com>',
	        'subject' => 'Hello',
            'text'	=> 'Testing some Mailgun awesomness!',
            'attachement' => [
                'filepath' => "storage/pdf/billetsElectronique/",
                'filename' => "reservation_3BUH2T.pdf",
            ]
        ]);
        dd($result);
        */

        
        Mail::to("rekhichem@gmail.com")->send(new HelloMailGun());
    }
}
