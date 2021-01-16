@extends('layouts.appAfter')
@section('content')

<div class="col-sm-12">
    <br />
    <h3 class="display-5 text-center">Train Schedule</h3>    
      <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Train ID</th>
                <th>Total Seat</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th colspan="2" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$train->train_id}}</td>
                    <td>{{$train->total_seat}}</td>
                    <td>{{$train->origin}}</td>
                    <td>{{$train->destination}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->departure_time}}</td>
                  
                    <td class="text-center">
                      <form action="{{ route('trains.destroy', $train->train_id)}}" method="post">
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
        <a style="margin: 19px;" href="{{ route('trains.create')}}" class="btn btn-primary">New Train Schedule</a>
      </div>
    
</div>
@endsection


