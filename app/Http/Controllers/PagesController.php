<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class PagesController extends Controller
{
    //
    public function home () {
        return view('welcome');
    }
    public function about() {
        $produits = product::get();
        return view('jack')->with('produits', $produits);
    }

    public function conn () {

        return view('dare');
    }
}
