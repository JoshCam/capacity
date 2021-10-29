@extends('layouts.admin') @section('title') Events @endsection
@section('content')
<div class="col-md-6" id="create-event-app">
    <h1>Create Event - {{ $club->name }}</h1>
    <div class="card mb-3">
        <div class="card-body">
            <form action="{{ route('clubs.events.store', $club) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Event Name:</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                    />
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input
                        type="text"
                        class="form-control"
                        id="image"
                        name="image"
                    />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"
                        >Description:</label
                    >
                    <textarea
                        type="text"
                        class="form-control"
                        id="description"
                        name="description"
                    ></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">date:</label>
                    <input
                        type="date"
                        class="form-control"
                        id="date"
                        name="date"
                    />
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label"
                        >Start Time:</label
                    >
                    <input
                        type="time"
                        class="form-control"
                        id="start_time"
                        name="start_time"
                    />
                </div>
                <div class="mb-3">
                    <label for="finish_time" class="form-label">End Time:</label>
                    <input
                        type="time"
                        class="form-control"
                        id="finish_time"
                        name="finish_time"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection @section('scripts')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    let myVueApp = new Vue({
        el: "#create-event-app",
        data() {
            return {};
        },
        mounted() {},
        computed: {},
        watch: {},
        methods: {},
    });
</script>
@endsection
