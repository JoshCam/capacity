@extends('layouts.user-facing')



@section('content')
    <div class="col-md-6">
        <h1>
            {{ $club->name }} - {{ $club->occupancy }}/{{ $club->capacity }}
        </h1>

        <img src="{{ $club->image }}" alt="Club Image" 
            class="img-fluid club-image"
        >
        <div class="m-2 club-description">
            <p>
                {{ $club->description }}
            </p>
            <!-- <a href="https://www.google.com/maps/place/{{ $club->address }}" target="_blank" class="btn btn-primary mb-3">Get Directions</a> -->
        </div>
    </div>
    <div class="col-md-6">
        <div class="events-card card">
            <h2>Upcoming Events</h2>
            @include('components.clubs.event')
        </div>
    </div>
    <div class="col-md-6">
        <div class="map-card">
            <h2>Find {{ $club->name }}</h2>
            @include('components.clubs.map')
        </div>
    </div>
@endsection