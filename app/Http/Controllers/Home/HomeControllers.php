<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeControllers extends Controller
{
   /**
    * 
    * home page 
    */
   
    public function index(){
        return view('home.index');

    }
}
