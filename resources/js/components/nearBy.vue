<template>
    <div>
        <p v-for="club in clubs">{{ club.name }}</p>
    </div>
</template>

<script>
export default {
    name: "NearBy",
    components: {},
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
    },
};
</script>

<style scoped></style>
