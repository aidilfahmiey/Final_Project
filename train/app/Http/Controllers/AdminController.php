<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
const ADMINS = '/admins';

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('train.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'password'=>'required',
            'u_name'=>'required',
            'u_age'=>'required',
            'u_email'=>'required',
            'u_phone'=>'required',
            'u_address'=>'required',
            'shift_no'=>'required'
        ]);
        $admins = new Admin([
            'user_id' => $request->get('user_id'),
            'password' => $request->get('password'),
            'u_name' => $request->get('u_name'),
            'u_age' => $request->get('u_age'),
            'u_email' => $request->get('u_email'),
            'u_phone' => $request->get('u_phone'),
            'u_address' => $request->get('u_address'),
            'shift_no' => $request->get('shift_no')
        ]);
        $admins->save();
        return redirect(ADMINS)->with('success', 'Admin Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::find($id);
        return view('train.show', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::find($id);
        return view('train.edit', compact('admins'));
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
        $request->validate([
            'user_id'=>'required',
            'password'=>'required',
            'u_name'=>'required',
            'u_age'=>'required',
            'u_email'=>'required',
            'u_phone'=>'required',
            'u_address'=>'required',
            'shift_no'=>'required',
        ]);
        $admins = Admin::find($id);
        $admins->user_id =  $request->get('user_id');
        $admins->password = $request->get('password');
        $admins->u_name = $request->get('u_name');
        $admins->u_age = $request->get('u_age');
        $admins->u_email =$request->get('u_email');
        $admins->u_phone =$request->get('u_phone');
        $admins->u_address =$request->get('u_address');
        $admins->shift_no = $request->get('shift_no');
        $admins->save();
        return redirect(ADMINS)->with('success', 'Admin Details Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = Admin::find($id);
        $admins->delete();
        return redirect(ADMINS)->with('success', 'Admin Details Deleted!');
    }
}
