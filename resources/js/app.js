require("./bootstrap");

require("alpinejs");

import NearBy from "./components/nearBy";

new Vue({
    el: "#nearBy",
    components: {
        NearBy,
    },
});
