<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }
    public function manage(){
        return view('pages.manage');
    }
    public function edit(){
        return view('pages.edit');
    }
}
