<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $datalist = User::all();
        return view('admin.user' , ['datalist' => $datalist ] );
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
    public function edit( User $user , $id )
    {
        $data = User::find($id);
        return view('admin.user_edit',['data'=>$data]);
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
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->name = $request->input('email');
        $data->name = $request->input('phone');
        $data->name = $request->input('address');
        if ( $request->file('image') != null ){
            $data->profile_photo_path = Storage::putFile('profile-photos',$request->file('image'));
        }
        $data->save();
        return redirect()->route('admin_users')->with('success','User Information Updated');
    }

    public function user_roles( User $user , $id ){
        $data = User::find($id);
        $datalist = Role::all()->sortBy('name');

        return view('admin.user_roles',['data'=>$data,'datalist'=>$datalist]);
    }

    public function user_role_store(Request $request , User $user , $id ){

        $user = User::find($id);
        $roleid = $request->input('roleid');
        $user->roles()->attach($roleid);
        return redirect()->back()->with('success','Role added to user');

    }

    public function user_role_delete(Request $request , User $user , $userid , $roleid ){
        $user = User::find($userid);
        $user->roles()->detach($roleid);
        return redirect()->back()->with('success','Role deleted from user');
    }
    public function destroy($id)
    {
        //
    }
}
