<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function reserveCar(Request $request, $carId){
        $id = Auth::user()->id;
        $data = new Reservation();
        $data -> user_id = $id;
        $data -> car_id = $carId;
        $data -> where_you_from = $request->input('whereyoufrom');
        $data -> where_you_go = $request->input('whereyougo');
        $data -> rezdate = $request->input('rezdate');
        $data -> reztime = Carbon::now()->toTimeString();
        $data -> returndate = $request->input('returndate');

        $data -> price = $request->input('price');
        $data -> amount = $request->input('amount');
        $data -> price = $request->input('price');
        $data -> ip = $request->ip();
        $data->save();

        return  redirect()->route('user_reservations');
    }


    public function messages()
    {
        $email = Auth::user()->email;

        $messages = Message::all()->where('email',"=",$email);

        return view("profile.messages", [ 'messages' => $messages ]);
    }
    public function reservation(){

        $id = Auth::user()->id;

        $reservations = Reservation::all()->where('user_id',"=",$id);

        return view("profile.showReservations", [ 'reservations' => $reservations ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
