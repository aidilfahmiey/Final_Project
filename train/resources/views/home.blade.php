@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    <h1>WELCOME TO BORNEO TRAIN BOOKING SYSTEM!</h1>
                    <a href="/tickets" class="btn btn-primary">Display Tickets</a>
                    <a href="/trains" class="btn btn-primary">Display Schedule</a>
=======
                    
                    <div class="text-center">
                        <h1>WELCOME TO BORNEO TRAIN SYSTEM!</h1>
                        
                        <a href="/tickets" class="btn btn-primary">Display Tickets</a>
                        <a href="/trains" class="btn btn-primary">Display Schedule</a>
                    </div>
>>>>>>> bf011c1802bbe798f0351925bc45ab1ed988ce28
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
