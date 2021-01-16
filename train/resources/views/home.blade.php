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


                    <div class="text-center">
                        <h1> ---------------------------</h1>
                        <h1>WELCOME</h1>
                        <h1>TO</h1>
                        <h1> BORNEO RAPID SYSTEM</h1>
                        <h1> ---------------------------</h1>
                        <p><em>Borneo Rapid is a company which provides public train transportation service dedicated for East Malaysia part that is Sarawak and Sabah area.</em></p>

                        <a href="/tickets" class="btn btn-primary">Display Tickets</a>
                        <a href="/trains" class="btn btn-primary">Display Schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
