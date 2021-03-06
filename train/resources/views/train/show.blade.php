@extends('layouts.appAfter')
@section('content')

<div class="row" style="margin-bottom: 50px;auto;display: block">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Booking Details</h3>
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
            <div class="form-group">
                <label for="ticket_id">Ticket ID</label>
                <input type="number" class="form-control" name="ticket_id" value="{{ $tickets->ticket_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="train_id">Train ID</label>
                <input type="text" class="form-control" name="train_id" value="{{ $tickets->train_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="id">Worker ID</label>
                <input type="number" class="form-control" name="id" value="{{ $tickets->user_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" name="origin" value="{{ $tickets->origin }}" readonly>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="{{ $tickets->destination }}" readonly>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $tickets->price }}" readonly>
            </div>
            <div class="form-group">
                <label for="seat_no">Seat No</label>
                <input type="number" class="form-control" name="seat_no" value="{{ $tickets->seat_no }}" readonly>
            </div>

            </form>

            <div class="text-center">
            <a href="{{ route('tickets.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection