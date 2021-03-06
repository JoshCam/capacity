@extends('layouts.admin')

@section('title')
    Edit {{ $event->name }}
@endsection

@section('content')
    <div class="col-md-6 mb-3" id="edit-form-app">
        <h1>Update {{ $event->name }}</h1>
        <div class="card edit-club-card">
            <div class="card-body edit-club-card">
                <form @submit="checkForm" action="{{ route('events.update', $event) }}" method="POST">
                    @csrf
                    <p v-if="errors.length">
                        <b>Please correct the following error(s):</b>
                        <ul>
                            <li v-for="error in errors">@{{ error }}</li>
                        </ul>
                    </p>
                    <div class="mb-3">
                        <label for="name" class="form-label">Event Name:</label>
                        <input v-model="name" v-text="event.name" type="text" class="form-control custom-input" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Event Image</label>
                        <input v-model="image" v-text="event.image" type="text" class="form-control custom-input" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea v-model.number="description" v-text="event.description" type="text" class="form-control custom-input" id="description" name="description">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input v-model="date" v-text="event.date" type="date" class="form-control custom-input" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input v-model="start_time" v-text="event.start_time" type="time" class="form-control custom-input" id="start_time" name="start_time">
                    </div>
                    <div class="mb-3">
                        <label for="finish_time" class="form-label">Finish Time</label>
                        <input v-model="finish_time" v-text="event.finish_time" type="time" class="form-control custom-input" id="finish_time" name="finish_time">
                    </div>
                    <button type="submit" class="btn btn-primary" :disabled="clean">Submit</button>
                    <!-- :disabled="clean" - add to button above to implement disabling btn if form is clean -->
                    <input type="hidden" name="_method" value="PUT">
                </form>
                <form action="{{ route('events.destroy', $event) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger mt-1">Delete event</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>
            let event = {!! $event !!};
            let myVueApp = new Vue({
                el: "#edit-form-app",
                data() {
                    return {
                        event : event,
                        errors: [],
                        name: event.name,
                        image: event.image,
                        description: event.description,
                        date: event.date,
                        start_time: event.start_time,
                        finish_time: event.finish_time,

                        dirty: false,
                    };
                },
                mounted() {},
                computed: {
                    clean() {
                        return !this.dirty
                    },
                },
                watch: {
                    'name': function () {
                        this.dirty = true;
                    }
                },
                methods: {
                    checkForm(e) {
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
