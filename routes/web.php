<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
//use Obydul\LyptoAPI\Facades\Binance;
use Obydul\LyptoAPI\Exchanges\Binance;
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

Route::get('/', function () {
    return view('welcome');
});


Route::post('send_request' , function (Request $request){



// create a Binance object
    $binance = new Binance();

// create order
    $binance->createOrder($request);

// using facade


    Binance::createOrder($request);

});


Route::get('get_data' , function (Request $request){

    $endpoint = 'rsi';

    $query = http_build_query(array(
        'secret' => env('LYPTO_API_TAAPI_SECRET'),
        'exchange' => 'binance',
        'symbol' => 'BTC/USDT',
        'interval' => '1h'
    ));

// Define endpoint
    $url = "https://api.taapi.io/{$endpoint}?{$query}";

// create curl resource
    $ch = curl_init();

// set url
    curl_setopt($ch, CURLOPT_URL, $url);

//return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
    $output = curl_exec($ch);

// close curl resource to free up system resources
    curl_close($ch);

// View result
    print_r(json_decode($output));

});
Route::get('bin' , 'BinanceController@bin');
