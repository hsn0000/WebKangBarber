<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LookbookController extends Controller
{
    public function index()
    {
        return view('/lookbooks.index');
    }

    public function ubahlookbook($id)
    {
        return view('/lookbooks.ubahlookbook',['id' => $id]);
    }
}
