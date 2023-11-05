<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class ListDisplayController extends Controller
{
    public function listdisplay() {
        $landPosts=LandPost::all();
        return view('listdisplay',compact('landPosts'));
    }
}
