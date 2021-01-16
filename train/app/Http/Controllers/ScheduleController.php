<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

const TRAIN = '/trains';

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trains = Train::all();
        //return $trains;
       return view('train.showSchedule', compact('trains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('train.createSchedule');
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
            'train_id'=>'required',
            'total_seat' =>'required',
            'origin'=>'required',
            'destination'=>'required',
            'arrival_time'=>'required',
            'departure_time'=>'required',
            
        ]);

        $trains = new Train([
            'train_id' => $request->get('train_id'),
            'total_seat' => $request->get('total_seat'),
            'origin' => $request->get('origin'),
            'destination' => $request->get('destination'),
            'arrival_time' => $request->get('arrival_time'),
            'departure_time' => $request->get('departure_time'),
            
        ]);
        $trains->save();
        return redirect(TRAIN)->with('success', 'Train Schedule Saved!');
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
    public function edit($train_id)
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
    public function update(Request $request, $train_id)
    {
        $request->validate([
            'train_id'=>'required',
            'total_seat' =>'required',
            'origin'=>'required',
            'destination'=>'required',
            'arrival_time'=>'required',
            'departure_time'=>'required',
            
        ]);
        $trains = Train::find($train_id);
            $trains->train_id = $request->get('train_id');
            $trains->total_seat = $request->get('total_seat');
            $trains->origin = $request->get('origin');
            $trains->destination = $request->get('destination');
            $trains->arrival_time = $request->get('arrival_time');
            $trains->departure_time = $request->get('departure_time');

            $trains->save();
            return redirect(TRAIN)->with('success', 'Schedule Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($train_id)
    {
        $trains = Train::find($train_id);
        $trains->delete();
        return redirect(TRAIN)->with('success', 'Schedule Deleted!');
    }
}
