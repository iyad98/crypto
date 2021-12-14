<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Obydul\LyptoAPI\Exchanges\Binance;
use Obydul\LyptoAPI\Libraries\LyptoRequest;


class BinanceController extends Controller
{
    //
    private $binance;
    /**
     * constructor.
     */
    public function __construct()
    {
//        $api_key = "2RSRYyLxq0uz2ncYnp53YeD6IYjVvNIbHZPm0G4Vl4QTQ6jZvZrwMF6UacTNoX1y";
//        $api_secret = "sUaCpzEoZ5lnYaxvY5ZtnZ7wgAEJYGMV6zrQ4Z2wXy5LgZTUidnATHYq5a0p1HC4";
//        $mode = "live"; // default is live
//        $this->binance = new Binance($api_key, $api_secret, $mode);
        $this->binance = new Binance();
    }


    public function bin(){

                // account info
                $account_info = $this->binance->accountInfo();
                dd($account_info);


//
//        // create order
//                $request = new LyptoRequest();
//                $request->symbol = 'BTCUSDT';
//                $request->side = "SELL";
//                $request->type = "LIMIT";
//                $request->timeInForce = "GTC";
//                $request->quantity = 0.01;
//                $request->price = 9000;
//                $request->newClientOrderId = "my_order_id_1112";
//                $create_order = $this->binance->createOrder($request);
//                dd($create_order);
//
//        // account trade list
//                $request = new LyptoRequest();
//                $request->symbol = "BTCUSDT";
//                $trade_list = $this->binance->accountTradeList($request);
//                dd($trade_list);

    }


}
