@extends('layouts.main')



@section('content')
    <div class="col-md-6">
        <h1>
            {{ $club->name }}
        </h1>

        <img src="{{ $club->image }}" alt="Club Image" 
            style="height: 300px; width: 500px;" 
            class="img-fluid club-image"
        >
        <div class="m-2 club-description">
            <p>
                {{ $club->description }}
            </p>
            <a href="https://www.google.com/maps/place/{{ $club->address }}" target="_blank" class="btn btn-primary mb-3">Get Directions</a>
        </div>
    </div>
    <div class="col-md-6">
        @include('components.clubs.event')
    </div>
@endsection