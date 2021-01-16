@extends('layouts.appAfter')
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
          <select class="form-control" id="train_id" name="train_id">
            <option value="NULL" selected="true" disabled="disabled">Select Train ID</option>
            <option value="KCH01A">KCH01A</option>
            <option value="KSN02A">KSN02A</option>
            <option value="SAN03A">SAN03A</option>
            <option value="SRK04A">SRK04A</option>
            <option value="SBU05A">SBU05A</option>
            <option value="BTL06A">BTL06A</option>
            <option value="MRI07A">MRI07A</option>
            <option value="LBG08A">LBG08A</option>
            <option value="KKU09A">KKU09A</option>
            <option value="KDT10A">KDT10A</option>
            <option value="SDK11A">SDK11A</option>
            <option value="LHD12A">LHD12A</option>
            <option value="TWU13B">TWU13B</option>
            <option value="LHD12B">LHD12B</option>
            <option value="SDK11B">SDK11B</option>
            <option value="KDT10B">KDT10B</option>
            <option value="KKU09B">KKU09B</option>
            <option value="LBG08B">LBG08B</option>
            <option value="MRI07B">MRI07B</option>
            <option value="BTL06B">BTL06B</option>
            <option value="SBU05B">SBU05B</option>
            <option value="SRK04B">SRK04B</option>
            <option value="SAN03B">SAN03B</option>
            <option value="KSN02B">KSN02B</option>
          </select>
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
            <option value="NULL" selected="true" disabled="disabled">Select Origin</option>
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
            <option value="NULL" selected="true" disabled="disabled">Select Destination</option>
            <option value="Tawau">Tawau (A)</option>
            <option value="Kuching">Kuching (B)</option>
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