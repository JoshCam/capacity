@extends('layouts.admin')

@section('content')
    <h1>Admin Panel</h1>
    @if ($club->name )
        <h2>{{ $club->name }}</h2>
        <img class="club-image" src="{{ $club->image }}" alt="">
        <p>Useful Info:</p>
        <ul>
            <li>Up coming events</li>
            <li>useful contact info for employees</li>
            <li>comments for all staff</li>
            <li>Other stuff...</li>
        </ul>
    @else
        <h1>No Club</h1>
    @endif
@endsection