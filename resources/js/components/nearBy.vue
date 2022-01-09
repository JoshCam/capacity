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
        };
    },

    mounted() {
        this.getClubs();
    },

    methods: {
        getClubs() {
            window.axios
                .get("/api/nearBy/")
                .then((response) => {
                    // handle success
                    // console.log(response.data);
                    this.clubs = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },
        onClicked(clubId) {
            console.log(clubId);
        },
    },
};
</script>

<style scoped></style>
