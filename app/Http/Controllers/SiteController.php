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
       return view('posts.post');
   }

   public function ubahpost($id)
   {
       return view('posts.ubahpost',['id' => $id]);
   }

}
