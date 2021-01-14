@extends('base')
@section('main')
<div class="row">

<div class="col-sm-12" style="margin-bottom: 50px;auto;display: block">
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
          <th>Ticket ID</th>
          <th>Train ID</th>
          <th>Shift No</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Price</th>
          <th>Seat</th>
          
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tickets as $count => $ticket)
        <tr>
            <td>{{++$count}}</td>
            <td><a href="{{ route('train.show',$tickets->ticket_id)}}">{{$tickets->ticket_id}}</a></td>

              <td>{{$tickets->train_id}} </td>
              <td>{{$tickets->id}}</td>
              <td>{{$tickets->origin}}</td>
              <td>{{$tickets->destination}}</td>
              <td>{{$tickets->price}}</td>
              <td>{{$tickets->seat_no}}</td>
              
            <td class="text-center">
                <a href="{{ route('tickets.edit',$tickets->ticket_id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('tickets.destroy', $tickets->ticket_id)}}" method="post">
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
