<template>
    <div class="row">
        <club-card
            v-for="club in clubs"
            :key="club.id"
            :club="club"
            @clicked="onClicked"
            class="col-md-4 mb-3"
        />
    </div>
</template>

<script>
import ClubCard from "./widgets/clubCard.vue";
export default {
    name: "NearBy",
    components: { ClubCard },
    data() {
        return {
            clubs: "",
            userCoords: {},
        };
    },

    mounted() {
        // Oder should be:
        // Get location
        // Get clubs near that location
        // ATM we've got it the wrong way around just for testing/proving our vue components
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
            window.axios.post("/api/radius/", userCoords).then((response) => {
                this.clubs = response.data;
            });
        },

        onClicked(clubId) {
            // This corresponds to an event that isn't actually needed
            console.log(clubId);
        },
    },
};
</script>

<style scoped></style>
