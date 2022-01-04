<template>
    <div>test</div>
</template>

<script>
export default {
    name: "NearBy",
    components: {},
    data() {
        return {
            clubs: {},
        };
    },
    mounted() {
        window.axios
            .get("/api/nearBy/")
            .then(function (response) {
                // handle success
                console.log(response);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            });
    },

    methods: {},
};
</script>

<style scoped></style>
