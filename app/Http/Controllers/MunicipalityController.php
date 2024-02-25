<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipalityController extends Controller
{
    public function municipality(Request $request) {
        $data1 = [
            'msg'=>'これはコントローラ１番目$data1から渡されたメッセージです',
            'prefecture'=>$request->prefecture
        ];
        $data2 = [
            'msg2'=>'これはコントローラ２番目$data2から渡されたメッセージです',
            'prefecture2'=>$request->prefecture
        ];
        // dd($data);
        // $prefecture = $request->input('prefecture');
        return view('municipality',$data1,$data2);
    }
}
