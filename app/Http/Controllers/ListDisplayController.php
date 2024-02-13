<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandPost;

class ListDisplayController extends Controller
{
    public function listdisplay() {
        // $landPosts=LandPost::orderBy('id', 'desc')->get();

        // $paginatePosts=LandPost::paginate(25);
        // dd($paginatePosts);
        return view('listdisplay');
       // return view('listdisplay',compact('landPosts','pagenatePosts'));
    }
}
