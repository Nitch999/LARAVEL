<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    //
    public function home () {
        return view('welcome');
    }
    public function about() {
        return view('jack');
    }
    public function conn () {
        return view('dare');
    }
}
