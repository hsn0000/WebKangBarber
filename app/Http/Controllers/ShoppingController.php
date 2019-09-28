<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function pomade()
    {
        return view('shoppings.pomade');
    }

    public function spray ()
    {
        return view('shoppings.spray');
    }

    public function haircare()
    {
        return view('shoppings.haircare');
    }

    public function bodycare()
    {
        return view('shoppings.bodycare');
    }
}
