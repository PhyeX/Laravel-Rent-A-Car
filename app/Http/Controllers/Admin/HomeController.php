<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public static function categorylist(){

        return Category::where('parent_id','*',0)->with('children')->get();
    }

    public function index()
    {
        return view("admin.index");
    }

    public function login(){

        return view("admin.login");
    }

    public function login_check(Request $request){

        if( $request -> isMethod('post') ){

            $credentials = $request -> only('email','password');
            if( Auth::attempt($credentials) ){
                $request->session()->regenerate();

                return view('admin.index');
            }

            return back()->withErrors ([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }

    }

    public function logout( Request $request ){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/home");

    }


}
