@extends('layouts.admin')

@section('content')
    <h1>Admin Panel</h1>
        @if ($club->name )
            <div class="col-md-6">
                <h2>{{ $club->name }}</h2>
                <img class="club-image" src="{{ $club->image }}" alt="">
                <p>Useful Info:</p>
                <ul>
                    <li>Up coming events</li>
                    <li>useful contact info for employees</li>
                    <li>comments for all staff</li>
                    <li>Other stuff...</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming Events</h5>
                    </div>
                </div>
            </div>
        @else
            <h1>No Club</h1>
        @endif
@endsection