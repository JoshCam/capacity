<template>
    <div>
        <div class="row" v-if="sortedClubs.length > 0">
            <club-card
                v-for="club in sortedClubs"
                :key="club.id"
                :club="club"
                class="col-md-4 mb-3"
            />
        </div>
        <div class="row" v-else>
            <h1>It doesn't look like you're near any clubs :'(</h1>
        </div>
    </div>
</template>

<script>
//
//
// THIS IS ALMOST DONE IT NEEDS TO HANDLE ERRORS - IF THERE ARE NO NEARBY CLUBS IT CRASHES!
//
//
import ClubCard from "./widgets/clubCard.vue";
export default {
    name: "NearBy",
    components: { ClubCard },
    data() {
        return {
            clubs: [],
            sortedClubs: [],
            userCoords: {},
        };
    },

    mounted() {
        this.getLocation();
        this.getClubsInRadius();
    },

    watch: {
        userCoords: function () {
            this.getClubsInRadius(this.userCoords);
        },
    },

    methods: {
        getLocation() {
            navigator.geolocation.getCurrentPosition((position) => {
                this.userCoords = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                };
            });
        },

        getClubsInRadius(userCoords) {
            let clubs = [];
            window.axios.post("/api/radius/", userCoords).then((response) => {
                console.log(response.data.length);
                clubs = response.data;
                clubs.sort((a, b) => {
                    return a.distance - b.distance;
                });
                this.sortedClubs = clubs;
            });
        },
    },
};
</script>

<style scoped></style>
