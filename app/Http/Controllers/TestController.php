<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\SelectValue;

class TestController extends Controller
{
    public function test() {
        $a001 = new SelectValue();
        $a001->avg();
        var_dump($a001);
    }
}
