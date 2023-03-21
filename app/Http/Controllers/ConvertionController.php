<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertionController extends Controller
{
    public function convert()
    {
        // set API Endpoint, access key, required parameters
        $endpoint = 'latest';
        $access_key = '3b5717768fcf6d11bbf301a835c8065e';

        $base = "DZD";

        // initialize CURL:
        $ch = curl_init('http://data.fixer.io/api/' . $endpoint . '?access_key=' . $access_key);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);

        // Access the exchange rate values, e.g. GBP:
        // access the conversion result
        echo "<?php <br>";
        echo '$rates = [ <br>';
        foreach ($exchangeRates['rates'] as $code => $value) {
            echo " '$code' => " . round($value / 133, 4) . ",<br>";
        }
        echo "];";
        //dd($exchangeRates);
    }
}