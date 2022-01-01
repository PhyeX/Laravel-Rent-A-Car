<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {

        $datalist = Car::all();

        return view("admin.car",['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create( Request $request )
    {

        $datalist = Car::all();

        return view('admin.car_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Car();

        $data -> category_id = $request->input('category_id');
        $data -> lugage = $request->input('lugage');
        $data -> seats = $request->input('seat');
        $data -> doors = $request->input('door');
        $data -> age = $request->input('age');
        $data -> price = $request->input('price');
        $data -> transmission = $request->input('transmission');
        $data -> user_id = Auth::id();
        $data -> title = $request->input('title');
        $data -> keywords = $request->input('keywords');
        $data -> description = $request->input('description');
        $data -> status = $request->input('status');
        $data -> detail = $request->input('detail');

        $data -> image = \Illuminate\Support\Facades\Storage::putFile('images',$request->file('image'));
        $data->save();
        return redirect()->route('admin_car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car,$id)
    {
        $data = Car::find($id);
        $datalist = Category::all();

        return view('admin.car_edit',['data' => $data,'datalist' => $datalist ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car ,$id)
    {
        $data = Car::find($id);

        $data -> category_id = $request->input('category_id');
        $data -> lugage = $request->input('lugage');
        $data -> seats = $request->input('seat');
        $data -> doors = $request->input('door');
        $data -> age = $request->input('age');
        $data -> price = $request->input('price');
        $data -> transmission = $request->input('transmission');
        $data -> user_id = Auth::id();
        $data -> title = $request->input('title');
        $data -> keywords = $request->input('keywords');
        $data -> description = $request->input('description');
        $data -> status = $request->input('status');
        $data -> detail = $request->input('detail');
        $data -> image = \Illuminate\Support\Facades\Storage::putFile('images',$request->file('image'));
        $data->save();

        return redirect()->route('admin_car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        $data = Car::find($id);

        $data->delete();

        return redirect()->route('admin_car');
    }
}
