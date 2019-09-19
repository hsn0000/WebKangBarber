<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LookbookController extends Controller
{
    public function index()
    {
        return view('/lookbooks.index');
    }
}
