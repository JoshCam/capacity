@extends('layouts.admin')

@section('title')
    Clicker - {{ $club->name }}
@endsection

@section('content')
    <div v-cloak id="counter-app">
        <div class="clicker">
            <p v-if="error">@{{ error }}</p>
            <button href="" class="clicker-btn btn" @click="increment">+</button>
            <div class="counter">@{{ count }}</div>
            <button class="clicker-btn btn" @click="decrement">-</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        let club = {!! $club !!};
        let myVueApp = new Vue({
            el: "#counter-app",
            data() {
                return {
                    count: club.occupancy,
                    club: club,
                    error : "",
                };
            },
            mounted() {},
            computed: {
                counterApiUrl() {
                    return '/api/clubs/' + club.id;
                }
            },
            watch: {},
            methods: {
                increment() {
                    this.count++
                    this.checkAndSendOccupancy();
                },
                decrement() {
                    this.count--
                    this.checkAndSendOccupancy();
                },
                checkAndSendOccupancy() {
                    if (this.count <= 0) {
                        this.count = 0
                        this.error = "Current capacity cannot be less than 0"
                    }  else if (this.count > this.club.capacity) {
                        this.count = this.club.capacity
                        this.error = "Current capacity cannot be greater than the maximum capacity"
                    } else {
                        this.club.occupancy = this.count;
                        this.error = ""
                        window.axios.put(this.counterApiUrl, this.club)
                    }
                }
            },
        });
    </script>
@endsection