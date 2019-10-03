<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function perhatian()
    {
       return view('daftarkaryawans.perhatian');
    }


    public function bogor()
    {
        return view('salons.bogor');
    }

    public function husinbarber()
    {
        return view('daftarkaryawans.bogor.barberhusin');
    }

    public function salphibarber()
    {
        return view('daftarkaryawans.bogor.barbersalphi');
    }

    public function juithabarber()
    {
        return view('daftarkaryawans.bogor.barberjuitha');
    }

    public function haerilbarber()
    {
        return view('daftarkaryawans.bogor.barberhaeril');
    }


    public function jakarta()
    {
        return view('salons.jakarta');
    }

    public function intratraining()
    {
        return view('daftarkaryawans.jakarta.intratraining');
    }

    public function kodehunter()
    {
        return view('daftarkaryawans.jakarta.kodehunter');
    }



    public function tangerang()
    {
        return view('salons.tangerang');
    }

    public function nusapersada()
    {
        return view('daftarkaryawans.tangerang.nusapersada');
    }


    public function bekasi()
    {
        return view('salons.bekasi');
    }

    public function barberbox()
    {
        return view('daftarkaryawans.bekasi.barberbox');
    }
  
}
