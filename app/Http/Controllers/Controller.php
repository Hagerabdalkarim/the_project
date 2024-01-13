<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

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
