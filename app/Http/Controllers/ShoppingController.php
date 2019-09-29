<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function pomade()
    {
        return view('shoppings.pomade');
    }

    public function ubahpomade($id)
    {
        return view('shoppings.ubahpomade',['id' => $id]);
    }

    public function spray ()
    {
        return view('shoppings.spray');
    }

    public function ubahspray ($id)
    {
        return view('shoppings.ubahspray',['id' => $id]);
    }

    public function haircare()
    {
        return view('shoppings.haircare');
    }

    public function ubahhaircare($id)
    {
        return view('shoppings.ubahhaircare',['id' => $id]);
    }

    public function bodycare()
    {
        return view('shoppings.bodycare');
    }

    public function ubahbodycare($id)
    {
        return view('shoppings.ubahbodycare',['id' => $id]);
    }


}
