<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GurdesController extends Controller
{
      public function index(){
        return view('homePage');
    }
    public function about(){
        return view('about');
    }
    public function team(){
        return view('team');
    }
    public function contact(){
        return view('contact');
    }
    public function service(){
        return view('service');
    }
}
