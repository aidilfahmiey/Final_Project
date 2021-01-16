@extends('layouts.app')
@section('content')

<div class="row" style="margin-bottom: 50px;auto;display: block">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Train Schedule</h3>
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
                <label for="train_id">Train ID</label>
                <input type="number" class="form-control" name="train_id" value="{{ $trains->train_id }}" readonly>
            </div>
            <div class="form-group">
                <label for="total_seat">Total ID</label>
                <input type="text" class="form-control" name="total_seat" value="{{ $trains->total_seat }}" readonly>
            </div>
            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" name="origin" value="{{ $trains->origin }}" readonly>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" name="destination" value="{{ $trains->destination }}" readonly>
            </div>
            <div class="form-group">
                <label for="arrival_time">Arrival Time</label>
                <input type="number" class="form-control" name="arrival_time" value="{{ $trains->arrival_time }}" readonly>
            </div>
            <div class="form-group">
                <label for="departure_time">Departure Time</label>
                <input type="number" class="form-control" name="departure_time" value="{{ $trains->departure_time }}" readonly>
            </div>
            
            </form>

            <div class="text-center">
            <a href="{{ route('trains.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection