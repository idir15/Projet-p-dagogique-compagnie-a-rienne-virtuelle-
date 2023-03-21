<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function download(){
        //dd(request('referenceBillet'));
        return Storage::disk('pdf')->download(request('referenceBillet'));
    }
}
