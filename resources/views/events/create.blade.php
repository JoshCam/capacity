@extends('layouts.admin') @section('title') Events @endsection
@section('content')
<div class="col-md-6" id="create-event-app">
    <h1>Create Event - {{ $club->name }}</h1>
    <div class="card event-card mb-3">
        <div class="card-body">
            <form @submit="checkForm" action="{{ route('clubs.events.store', $club) }}" method="post">
                @csrf
                <p v-if="errors.length">
                    <b>Please correct the following error(s):</b>
                    <ul>
                        <li v-for="error in errors">@{{ error }}</li>
                    </ul>
                </p>
                <div class="mb-3">
                    <label for="name" class="form-label">Event Name:</label>
                    <input
                        v-model="name"
                        type="text"
                        class="form-control custom-input"
                        id="name"
                        name="name"
                    />
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input
                        v-model="image"
                        type="text"
                        class="form-control custom-input"
                        id="image"
                        name="image"
                    />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label"
                        >Description:</label
                    >
                    <textarea
                        v-model="description"
                        type="text"
                        class="form-control custom-input"
                        id="description"
                        name="description"
                    ></textarea>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">date:</label>
                    <input
                        v-model="date"
                        type="date"
                        class="form-control custom-input"
                        id="date"
                        name="date"
                    />
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label"
                        >Start Time:</label
                    >
                    <input
                        v-model="start_time"
                        type="time"
                        class="form-control custom-input"
                        id="start_time"
                        name="start_time"
                    />
                </div>
                <div class="mb-3">
                    <label for="finish_time" class="form-label">End Time:</label>
                    <input
                        v-model="finish_time"
                        type="time"
                        class="form-control custom-input"
                        id="finish_time"
                        name="finish_time"
                    />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>
            let myVueApp = new Vue({
                el: "#create-event-app",
                data() {
                    return {
                        event : event,
                        errors: [],
                        name: "",
                        image: "",
                        description: "",
                        date: "",
                        start_time: "",
                        finish_time: "",

                        dirty: false,
                    };
                },
                mounted() {},
                computed: {},
                watch: {},
                methods: {
                    checkForm(e) {
                        console.log("runs")
                        if(this.name && this.image && this.description && this.date && this.start_time && this.finish_time) {
                            return true
                        }
                        
                        this.errors = [];

                        if (!this.name) {
                            this.errors.push('Name required.');
                        }
                        if (!this.image) {
                            this.errors.push('Image required.');
                        }
                        if (!this.description) {
                            this.errors.push('description required.');
                        }
                        if (!this.date) {
                            this.errors.push('Date required.');
                        }
                        if (!this.start_time) {
                            this.errors.push('Start time required.');
                        }
                        if (!this.finish_time) {
                            this.errors.push('Finish time required.');
                        }

                     e.preventDefault();
                    }
                },
            });
        </script>
@endsection
