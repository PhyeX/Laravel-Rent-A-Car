<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function getSetting(){

        return Setting::first();
    }

    public function index(){

         $setting = Setting::first();

         return view('home.index',[ 'setting' => $setting ]);
    }
    public function service(){

        return view('home.index');
    }
    public function cars(){
        return view('home.index');
    }
    public function about(){
        return view('home.index');
    }
    public function blog(){
        return view('home.index');
    }
    public function contact(){
        return view('home.index');
    }



}
