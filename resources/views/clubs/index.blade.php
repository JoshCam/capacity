@extends('layouts.user-facing')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <h1>All Clubs</h1>

        @foreach ($clubs as $club)
            <div class="col-md-4 mb-3">
                @include('components.clubs.summary')
            </div>
        @endforeach

        @if($clubs->hasPages())
            {{ $clubs->links() }}
        @endif
    </div>
@endsection