@extends('layouts.app')
@section('content')

<div class="row">

<div class="col-sm-12" style="margin-bottom: 10px;auto;display: block">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Ticket List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No.</th>
          <th>Ticket ID</th>
          <th>Train ID</th>
          <th>Worker ID</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Price</th>
          <th>Seat</th>
          
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $ticket)
        <tr>

              <td>{{ $loop->iteration}}</td>
              <td><a href="{{ route('tickets.show',$ticket->ticket_id)}}">{{$ticket->ticket_id}} 
              <td>{{$ticket->train_id}}</td>
              <td>{{$ticket->user_id}}</td>
              <td>{{$ticket->origin}}</td>
              <td>{{$ticket->destination}}</td>
              <td>{{$ticket->price}}</td>
              <td>{{$ticket->seat_no}}</td>
              
            <td class="text-center">
                <a href="{{ route('tickets.edit',$ticket->ticket_id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('tickets.destroy', $ticket->ticket_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('tickets.create')}}" class="btn btn-primary">New Ticket Booking</a>
  </div>
<div>

</div>
@endsection
