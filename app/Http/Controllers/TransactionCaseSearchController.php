<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionCaseSearchController extends Controller
{
    public function tcsearch(Request $request) {
        // phpinfo();
        // print_r($request);
        $fromyyyyn = $request->fromyyyyn;
        $toyyyyn = $request->toyyyyn;
        $citycode = $request->citycode;
        // return $fromyyyyn;
        // return $toyyyyn;
        // return $citycode;
        // return view('tcsearch', compact('fromyyyyn'));

        $basicTradeSearch = 'https://www.land.mlit.go.jp/webland/api/TradeListSearch?';
        $tradeSearchUrl = "$basicTradeSearch" . "from=" . "$fromyyyyn" . "&to=" . "$toyyyyn" . "&city=" . "$citycode";
        // return $tradeSearchUrl;
        // $jsonTradeSearch = file_get_contents($tradeSearchUrl);
        // $jsonTradeSearch = readfile($tradeSearchUrl);
        // readfile($tradeSearchUrl);
        // return $jsonTradeSearch;

        $resp = \Http::get($tradeSearchUrl);
        $arrResp = json_decode($resp->body(),true);
        // return $arrResp;

        // $arrTradeSearch = json_decode($jsonTradeSearch,true);
        // return $arrTradeSearch;
        // dd($arrResp);
        $arrResp = $arrResp["data"];
        // return $arrResp;
        return view('searchresults', compact('arrResp'));
    
    }
}
