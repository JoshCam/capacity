@extends('layouts.main')

@section('content')

    <h1>
        {{ $club->name }}
    </h1>

    <img src="{{ $club->image }}" alt="" class="img-fluid">

    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <p>
                {{ $club->description }}
            </p>
        </div>
    </div>
@endsection