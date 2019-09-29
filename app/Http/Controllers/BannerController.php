<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('banners.index');
    }

    public function ubahbanner($id)
    {

        return view('banners.ubahbanner', ['id' => $id]);
    }
}
