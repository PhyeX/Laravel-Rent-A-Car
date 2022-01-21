<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Reservation;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class ReservationController extends Controller
{

    public function index()
    {
        $reservations = Reservation::all();
        return view("admin.reservation",['reservations' => $reservations ]);
    }

    public function accept($id){
        $reservation = Reservation::find($id);
        $reservation->status = "Accepted";
        $reservation->save();
        return redirect()->route("admin_reservation");
    }
    public function confirm($id){
        $reservation = Reservation::find($id);
        $reservation->status = "Confirmed";
        $fdate =  explode("/",$reservation->rezdate);
        $tdate = explode("-",Carbon::now()->format('m-d-y'));
        $reservation->returndate = Carbon::now()->format('m-d-y');
        $reservation->returntime = Carbon::now()->toTimeString();
        $day =   $tdate[1] - $fdate[1];
        if( (int) $day < 0 )
            $day = $day * -1;

        $reservation->price = ($day)*(int)Car::find($reservation->car_id)->price;

        $reservation->save();
        return redirect()->route("admin_reservation");

    }
    public function reject($id){
        $reservation = Reservation::find($id);
        $reservation->status = "Rejected";
        $reservation->save();
        return redirect()->route("admin_reservation");

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
        $reservation = Reservation::find($id);

        return view('admin.reservation_edit',[ 'reservation' => $reservation ]);
    }


    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->note = $request->input('note');
        $reservation->save();

        return redirect()->route("admin_reservation");
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
