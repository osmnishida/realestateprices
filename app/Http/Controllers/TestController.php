<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Test;

class TestController extends Controller
{
    public function test(Test $a001) {
        // $a001 = new SelectValue();
        // $a001->avg(10,3);
        $a001 = $a001->avg(300,100);
        var_dump($a001);
    }
}
