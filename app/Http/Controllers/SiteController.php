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

   public function inbox()
   {
       return view('inboxs.index');
   }

   public function post()
   { 
       return view('postberitas.post');
   }

   public function ubahpost($id)
   {
       return view('postberitas.ubahpost',['id' => $id]);
   }

   
   public function postmodel()
   { 
       return view('postmodels.postmodel');
   }

   public function ubahpostmodel($id)
   {
       return view('postmodels.ubahpostmodel',['id' => $id]);
   }

  
}
