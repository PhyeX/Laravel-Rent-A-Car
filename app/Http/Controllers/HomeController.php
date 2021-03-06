<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public static function getSetting(){

        return Setting::first();
    }

    public function index(){
        $setting = Setting::first();
        $slider = Car::where('status', '=', "False")->limit(4)->get();
        return view('home.index',[ 'setting' => $setting ,'slider' => $slider ]);
    }
    public function service(){

        return view('home.index');
    }
    public function car($id){

        $car = Car::find($id);
        $setting = Setting::first();
        return view('home.carDetail',[ 'car' => $car , 'setting' => $setting]);
    }
    public function cars(){
        $cars = Car::all();
        $setting = Setting::first();
        return view('home.cars',[ 'cars' => $cars ,'setting' => $setting ]);
    }
    public function about(){
        $setting = Setting::first();

        return view('home.about',[ 'setting' => $setting ]);
    }
    public function blog(){
        return view('home.index');
    }
    public function contact(){

        $setting = Setting::first();
        return view('home.contact',[ 'setting' => $setting ]);
    }

    public function sendmessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->surname = $request->input('surname');
        $data->email = $request->input('email');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('home_contact')->with('success','Mesajınız Kaydedilmiştir, Teşekkür ederiz.');
    }

}
