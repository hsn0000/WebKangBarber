<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   public function about()
   {
       return view('sites.about');
   }

   public function download()
   {
       return view('sites.download');
   }
}
