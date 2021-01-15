@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-sm-8 offset-sm-2" style="margin-bottom: 50px;auto;display: block">
     <br />
       <h3 class="display-5 text-center">New Ticket Booking</h3>
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
      <form method="post" action="{{ route('tickets.store') }}">
        @csrf

       <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="train_id">Train ID</label>
          <input type="text" class="form-control" id="train_id" name="train_id" placeholder="Enter train ID">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="ticket_id">Ticket ID</label>
          <input type="number" class="form-control" id="ticket_id" name="ticket_id" placeholder="Enter ticket ID">
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="origin">Origin</label>
          <select class="form-control" id="origin" name="origin">
            <option value="Bintulu">Bintulu</option>
            <option value="Kuching">Kuching</option>
            <option value="Kudat">Kudat</option>
            <option value="Kota Kinabalu">Kota Kinabalu</option>
            <option value="Kota Samarahan">Kota Samarahan</option>
            <option value="Limbang">Limbang</option>
            <option value="Lahad Datu">Lahad Datu</option>
            <option value="Miri">Miri</option>
            <option value="Sri Aman">Sri Aman</option>
            <option value="Sibu">Sibu</option>
            <option value="Sandakan">Sandakan</option>
            <option value="Sarikei">Sarikei</option>
            <option value="Tawau">Tawau</option>
          </select>
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="destination">Destination</label>
          <select class="form-control" id="destination" name="destination">
            <option value="Kuching">Kuching</option>
            <option value="Tawau">Tawau</option>
          </select>
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" readonly>
        </div>
      </div>

      <div style="width: 50%;margin: auto;display: block;">
        <div class="form-group">
          <label for="seat_no">Seat No</label>
          <input type="number" class="form-control" id="seat_no" name="seat_no" min="1" max="60">
        </div>
      </div>
    
 
             <div class="row justify-content-center">
             <a href="{{ route('tickets.index')}}" class="btn btn-primary">Returns</a>&nbsp;&nbsp;                        
             <button type="submit" class="btn btn-primary text-center" style="margin-right: 10px">Save Details</button>
             <button type="reset" class="btn btn-primary" name="reset">Reset</button>
             </div>
         </form>
     </div>
   </div>
   </div>


@endsection