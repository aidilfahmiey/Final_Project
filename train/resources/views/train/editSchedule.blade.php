@extends('layouts.appAfter')
@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Edit Train Schedule</h3>
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
        <form method="post" action="{{ route('trains.update', $trains->train_id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="train_id">Train ID</label>
                <input type="text" class="form-control" name="train_id" value="{{ $trains->train_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="total_seat">Total Seat</label>
                <input type="number" class="form-control" name="total_seat" value="{{ $trains->total_seat }}">
            </div>
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" name="origin" value="{{ $trains->origin }}">
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="{{ $trains->destination }}">
            </div>
            <div class="form-group">
                <label for="arrival_time">Arrival</label>
                <input type="text" class="form-control" name="arrival_time" value="{{ $trains->arrival_time }}">
            </div>
            <div class="form-group">
                <label for="departure_time">Departure</label>
                <input type="text" class="form-control" name="departure_time" value="{{ $trains->departure_time }}">
            </div>

            <div class="text-center">
            <a href="{{ route('train.showSchedule')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;
            <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection
