<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionCaseSearchController extends Controller
{
    public function tcsearch(Request $request) {
        $fromyyyyn = $request->fromyyyyn;
        $toyyyyn = $request->toyyyyn;
        $citycode = $request->citycode;
        // return $fromyyyyn;
        // return $toyyyyn;
        // return $citycode;
        // return view('tcsearch', compact('fromyyyyn'));

        $basicTradeSearch = "https://www.land.mlit.go.jp/webland/api/TradeListSearch?";
        $tradeSearchUrl = "$basicTradeSearch" . "from=" . "$fromyyyyn" . "&to=" . "$toyyyyn" . "&city=" . "$citycode";
        // return $tradeSearchUrl;
        $jsonTradeSearch = file_get_contents($tradeSearchUrl);
        return $jsonTradeSearch;
        // $arrTradeSearch = json_decode($jsonTradeSearch,true);
        // return $arrTradeSearch;
        // dd($arrTradeSearch);
    }
}
