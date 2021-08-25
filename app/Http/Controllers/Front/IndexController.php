<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Timebooking;
class IndexController extends Controller
{
    public function index(){
        return view('front.index');
    }
   

    

}
