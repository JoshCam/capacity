<template>
    <a @click="clicked()" :href="clubURL" class="mt-3">
        <div class="card club-card">
            <img
                :src="club.image"
                class="card-img-top club-card-img"
                style="height: 200px; object-fit: cover"
                alt="Club Image"
            />
            <div class="card-body">
                <h5 class="card-title">{{ club.name }}</h5>
                <p class="card-text">
                    capacity:
                    {{ club.occupancy }}/{{ club.capacity }}
                </p>
                <p>
                    {{
                        Math.round((club.distance + Number.EPSILON) * 100) /
                        100
                    }}km
                </p>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: "clubCard",
    props: {
        club: {
            required: true,
            type: Object,
        },
    },

    data() {
        return {};
    },

    computed: {
        clubURL() {
            return "/clubs/" + this.club.id;
        },
    },

    methods: {},
};
</script>

<style>
a {
    text-decoration: none;
}
</style>
