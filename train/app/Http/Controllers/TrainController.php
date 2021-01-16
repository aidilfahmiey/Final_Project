<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;


const TICKET = '/tickets';


class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        //return $tickets;
       return view('train.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('train.create');
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
            'ticket_id' =>'required',
            'origin'=>'required',
            'destination'=>'required',
            'seat_no'=>'required',
            
        ]);

        $user_id = auth()->id();
        

        $tickets = new Ticket([
            'train_id' => $request->get('train_id'),
            'ticket_id' => $request->get('ticket_id'),
            'user_id' => $request['user_id'] = $user_id,
            'origin' => $request->get('origin'),
            'destination' => $request->get('destination'),
            'seat_no' => $request->get('seat_no'),
            
        ]);
        $tickets->save();
        return redirect(TICKET)->with('success', 'Booking Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ticket_id)
    {
        $tickets = Ticket::find($ticket_id);
  
        return view('train.show', compact('tickets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ticket_id)
    {
        $tickets = Ticket::find($ticket_id);
        //return $tickets;
        return view('train.edit', compact('tickets'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ticket_id)
    {
        $request->validate([
            'ticket_id'=>'required',
            'train_id'=>'required',
            'origin'=>'required',
            'destination'=>'required',
            'seat_no'=>'required',
            
        ]);
        $tickets = Ticket::find($ticket_id);
            $tickets->ticket_id = $request->get('ticket_id');
            $tickets->train_id = $request->get('train_id');
            $tickets->origin = $request->get('origin');
            $tickets->destination = $request->get('destination');
            $tickets->seat_no = $request->get('seat_no');

            $tickets->save();
            return redirect(TICKET)->with('success', 'Booking Updated!');
            
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ticket_id)
    {
        $tickets = Ticket::find($ticket_id);
        $tickets->delete();
        return redirect(TICKET)->with('success', 'Booking Deleted!');
    }
}
