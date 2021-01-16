@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2" style="margin-bottom: 50px;auto;display: block">
     <br />
       <h3 class="display-5 text-center">New Train Schedule</h3>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div>
         <br />
       @endif

      <form method="post" action="{{route('trains.store') }}">
        @csrf

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="train_id">Train ID</label>
          <input type="text" class="form-control" id="train_id" name="train_id" placeholder="Enter train ID">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="total_seat">Total Seat</label>
          <input type="number" class="form-control" id="total_seat" name="total_seat" placeholder="Enter total seat">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="origin">Origin</label>
          <input type="text" class="form-control" id="origin" name="origin" placeholder="Enter origin">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="destination">Destination</label>
          <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter destination">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="arrival_time">Arrival</label>
          <input type="text" class="form-control" id="arrival_time" name="arrival_time" placeholder="Enter arrival time">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="departure_time">Departure</label>
          <input type="text" class="form-control" id="departure_time" name="departure_time" placeholder="Enter departure time">
        </div>
      </div>
    
 
             <div class="row justify-content-center">
             <a href="{{ route('trains.index')}}" class="btn btn-primary">Returns</a>&nbsp;&nbsp;                        
             <button type="submit" class="btn btn-primary text-center" style="margin-right: 10px">Save Details</button>
             <button type="reset" class="btn btn-primary" name="reset">Reset</button>
             </div>
         </form>
     </div>
   </div>
   </div>


@endsection