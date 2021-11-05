@extends('layouts.admin')

@section('content')
    <h1>Admin Panel</h1>
        @if ($club->name )
            @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="col-md-6">
                <h2>{{ $club->name }}</h2>
                <img class="club-image img-fluid" src="{{ $club->image }}" alt="">
                <p>Useful Info:</p>
                <ul>
                    <li>Up coming events</li>
                    <li>useful contact info for employees</li>
                    <li>comments for all staff</li>
                    <li>Other stuff...</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="card events-card">
                    <h5 class="card-title">Upcoming Events</h5>
                     @include('components.clubs.event')
                </div>
            </div>
        @else
            <h1>No Club</h1>
        @endif
@endsection