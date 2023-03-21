<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CheckController;
use App\Http\Controllers\Detail_passeportController;

use Illuminate\Support\Facades\DB;

// fonction anonyme ou collback
/*
Route::get('/', function () {
    // return dd( DB::select('select * from client') );
    return view('welcome');
});
*/

Route::get('/enregistrement', 'CheckController@check');
// Route::view('enregistrement','check');
Route::post('/enregistrement', 'CheckController@store')->middleware('CheckEnregistrement');

Route::get(
    '/enregistrement/information',

    [
        'as' => '/enregistrement/information',
        'uses' => 'CheckController@retour',
    ]
);

Route::get(
    '/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
    [
        'as' => '/enregistrement/detail_passeport',
        'uses' => 'Detail_passeportController@afficherClient',
    ]
);

Route::post(
    '/enregistrement/{num_client},{nom_client},{prenom_client}/detail_passeport',
    [
        'as' => '/enregistrement/detail_passeport',
        'uses' => 'Detail_passeportController@insertToClient',
    ]
);


Route::get(
    '/enregistrement/informations/bagage',
    [
        'as' => '/enregistrement/informations/bagage',
        'uses' => 'BagageController@afficherBagage',
    ]
);
Route::post('/enregistrement/informations/bagage', 'BagageController@storeBagage');
Route::get(
    '/enregistrement/ajouterDesBagages/{num_client},{nom_client},{prenom_client}',
    [
        'as' => '/enregistrement/ajouterDesBagages',
        'uses' => 'AjouterBagageController@ajouterBagage',
    ]
);

Route::get(
    '/enregistrement/informations/bagage/siège',
    [
        'as' => '/enregistrement/informations/bagage/siège',
        'uses' => 'SiègeController@afficherSiège',
    ]
);

Route::post('/enregistrement/informations/bagage/siège', 'SiègeController@storeSiège');

Route::get('/enregistrement/macarte', 'PaiementController@carte');
Route::post('/enregistrement/macarte', 'PaiementController@carte');

Route::post(
    '/enregistrement/carte_embarquement/{idVol}-{num_client}',
    [
        'as' => '/enregistrement/carte_embarquement',
        'uses' => 'MacarteController@download',
    ]
);
//  Route::get('/enregistrement/carte_embarquement/{num_client},{nom_client},{prenom_client}', function () {
//         $vol =session()->get('vol');
//         $reservation = session()->get('reservation');

//       // return view('enregistrement.testpdf');
//     $pdf = PDF::loadView('/enregistrement/testpdf',['vol'=>$vol,'reservation'=>$reservation ]);
//       return $pdf->stream('Carte d embarquement.pdf');
//     });
Route::get(
    '/enregistrement/supprimer_Enregistrement',
    [
        'as' => '/enregistrement/supprimer_Enregistrement',
        'uses' => 'supprimerEnregController@PageSupprimer',
    ]
);

Route::post(
    '/enregistrement/supprimer_Enregistrement',
    [
        'as' => '/enregistrement/supprimer_Enregistrement',
        'uses' => 'supprimerEnregController@Supprimer',
    ]
);

Route::get('/', 'ReservationController@index')->name('home');

Route::get('/recherche', 'ReservationController@show');

Route::get('/informations', 'ReservationController@form');

Route::post('/test', 'InfoClientController@preStore')->middleware('ReservationFormMiddleware');
//Route::post('/finalize', 'InfoClientController@store');
Route::post('/finalize', 'InfoClientController@store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/catalogue', "CatalogueController@index");
Route::get('/testAeroports', "CatalogueController@test");

Route::get('/volz', function () {
    return view('vols');
});
Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/mailTest', "MailController@index");

Route::get('/pay', "PayementController@index");
Route::get('/larapay', "PayementController@notindex");
Route::post('/pay', "PayementController@paymentProcess");


//Route::get('/conversion',"ConvertionController@convert");

//Route::get('/stripe', "StripeController@index");
//Route::post('/stripe', "StripeController@process");

Route::get('/billet', "BilletController@index")->name('billet');

Route::get('/stripe','PayementController@stripeIndex');
Route::post('/stripe','PayementController@paymentProcess');

Route::get('/success',function (){
    return "oui";
});
Route::get('/cancel',function (){
    return view('denied');
})->name('fail');
/*
Route::get('/bravo', function(){
    return view('bravo',[
        
    ]);
});
*/

Route::post('/pdf','PdfController@download');


Route::get('/languageTest',"playGroundController@index");
Route::post('/languageTest',"playGroundController@lang");

Route::get('/informations-sur-le-voyage', function (){
    return view('staticPages.informations');
});

Route::get('/preparer-le-voyage', function (){
    return view('staticPages.prep');
});

Route::get('/voyager-en-famille', function (){
    return view('staticPages.famille');
});

Route::get('/bagages', function (){
    return view('staticPages.infoBagages');
});

Route::get('/animaux', function (){
    return view('staticPages.animaux');
});

Route::get('/classe-première', function (){
    return view('staticPages.premiere');
});

Route::get('/notre-vision-et-nos-valeurs', function (){
    return view('staticPages.vision');
});

Route::get('/notre-flotte', function (){
    return view('staticPages.flote');
});
Route::get('/nos-destinations', function (){
    return view('staticPages.destinations');
});

Route::get('/undeux', function (){
    return view('billet');
});