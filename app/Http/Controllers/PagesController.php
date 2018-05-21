<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact (){
      return view('tickets.create');
    }
    public function about (){
      return view ('about');
    }
}
