@extends('layouts.admin')

@section('title')
    Edit {{ $club->name }}
@endsection

@section('content')
    <div class="col-md-6" id="edit-form-app">
        <h1>Update {{ $club->name }}</h1>
        <div class="card">
            <div class="card-body form-card">
                <form @submit="checkForm" action="{{ route('clubs.update', $club) }}" method="POST">
                    @csrf
                    <p v-if="errors.length">
                        <b>Please correct the following error(s):</b>
                        <ul>
                            <li v-for="error in errors">@{{ error }}</li>
                        </ul>
                    </p>
                    <div class="mb-3">
                        <label for="name" class="form-label">Club Name:</label>
                        <input v-model="name" v-text="club.name" type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Club Image</label>
                        <input v-model="image" v-text="club.image" type="text" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="Capacity" class="form-label">Maximum Capacity</label>
                        <input v-model.number="capacity" v-text="club.capacity" type="number" class="form-control" id="capacity" name="capacity">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Club Address</label>
                        <input v-model="address" v-text="club.address" type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Club Description</label>
                        <textarea v-model="description" v-text="club.description" class="form-control" id="description" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_method" value="PUT">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>
            let club = {!! $club !!};
            let myVueApp = new Vue({
                el: "#edit-form-app",
                data() {
                    return {
                        club : club,
                        errors: [],
                        name: club.name,
                        image: club.image,
                        capacity: club.capacity,
                        address: club.address,
                        description: club.description,
                    };
                },
                mounted() {},
                computed: {},
                watch: {},
                methods: {
                    checkForm(e) {
                        if(this.name && this.image && this.capacity && this.address && this.description) {
                            return true
                        }
                        
                        this.errors = [];

                        if (!this.name) {
                            this.errors.push('Name required.');
                        }
                        if (!this.image) {
                            this.errors.push('Image required.');
                        }
                        if (!this.capacity) {
                            this.errors.push('Capacity required.');
                        }
                        if (!this.address) {
                            this.errors.push('Address required.');
                        }
                        if (!this.description) {
                            this.errors.push('Description required.');
                        }

                     e.preventDefault();
                    }
                },
            });
        </script>
@endsection