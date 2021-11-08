@extends('layouts.admin')

@section('title')
    Clicker - {{ $club->name }}
@endsection

@section('content')
    <div v-cloak id="counter-app">
        <div class="clicker">
            <p v-if="error">@{{ error }}</p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to reset {{ $club->name }}'s occupancy to 0?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="reset" data-bs-dismiss="modal">Confirm</button>
                </div>
                </div>
            </div>
            </div>
            <button href="" class="clicker-btn btn" @click="increment">+</button>
            <div class="counter">@{{ count }}</div>
            <button class="clicker-btn btn" @click="decrement">-</button>
            <button
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                class="btn-danger reset-btn btn clicker-btn"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                >RESET
            </button>
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
                reset() {
                    this.count = 0;
                    this.checkAndSendOccupancy();
                },
                checkAndSendOccupancy() {
                    if (this.count < 0) {
                        console.log("getting first if");
                        this.count = 0
                        this.error = "Current capacity cannot be less than 0"
                    }  else if (this.count > this.club.capacity) {
                        console.log("getting second if");
                        this.count = this.club.capacity
                        this.error = "Current capacity cannot be greater than the maximum capacity"
                    } else {
                        console.log("sending data");
                        this.club.occupancy = this.count;
                        this.error = ""
                        window.axios.put(this.counterApiUrl, this.club)
                    }
                }
            },
        });
    </script>
@endsection