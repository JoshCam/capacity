<template>
    <div class="row">
        <club-card
            v-for="club in sortedClubs"
            :key="club.id"
            :club="club"
            class="col-md-4 mb-3"
        />
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
            this.sortClubs(this.clubs);
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
