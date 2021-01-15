@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Edit Booking Details</h3>
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
        <form method="post" action="{{ route('tickets.update', $tickets->ticket_id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="ticket_id">Ticket ID</label>
                <input type="number" class="form-control" name="ticket_id" value="{{ $tickets->ticket_id }}">
            </div>
            <div class="form-group">
                <label for="train_id">Train ID</label>
                <input type="text" class="form-control" name="train_id" value="{{ $tickets->train_id }}">
            </div>
            <div class="form-group">
                <label for="id">Worker ID</label>
                <input type="number" class="form-control" name="id" value="{{ $tickets->user_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" name="origin" value="{{ $tickets->origin }}">
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="{{ $tickets->destination }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" value="{{ $tickets->price }}">
            </div>
            <div class="form-group">
                <label for="seat_no">Seat No</label>
                <input type="number" class="form-control" name="seat_no" value="{{ $tickets->seat_no }}">
            </div>

            <div class="text-center">
            <a href="{{ route('train.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection
