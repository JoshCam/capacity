@extends('layouts.admin')

@section('title')
    Clicker - {{ $club->name }}
@endsection

@section('content')
    <div v-cloak id="counter-app">
        <button @click="increment">+</button>
        <div>@{{ count }}</div>
        <button @click="decrement">-</button>
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
                    // if (this.count <= 0 || this.count > this.club.capacity) {
                    //     request = {message : "occupancy cannot be less than 0 or greater than the maximum capacity"}
                    // } else {

                    // }
                    this.club.occupancy = this.count;
                    window.axios.put(this.counterApiUrl, this.club)
                }
            },
        });
    </script>
@endsection