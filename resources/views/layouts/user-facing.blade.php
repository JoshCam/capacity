@extends('layouts.main')

@section('scripts')
<script>
    let myVueApp = new Vue({
        el: ".search-app",
        data() {
            return {
              search: "",
              clubSuggestions: [],
              sortByOptions : [
                {
                  display: "name",
                  sortBy:"name"
                },
                {
                  display: "Most To Least busy",
                  sortBy:"ratio",
                  direction: 'desc'
                },
                {
                  display: "Least To Most busy", 
                  sortBy:"ratio",
                  direction: 'asc'
                }
              ]
            };
        },
        mounted() {
        },
        computed: {

        },
        watch: {
          search() {
            this.updateClubSuggestions(this.search); 
          },
        },
        methods: {
          getClubUrl(club) {
            return route('clubs.show', club.id);
          },
          updateClubSuggestions() {
            if (this.search.length == 0)
                this.clubSuggestions = [];
            if (this.search.length >= 1)
                window.axios.get(route('clubs.search', {
                    search: this.search
                })).then(response => this.onClubSearchResult(response));
          },
          onClubSearchResult(response) {
            this.clubSuggestions = response.data.data;
          },
          getSortingUrl(option) {
            return route("clubs.index", {sort : option.sortBy, direction: option.direction})
          }
        },
    });

    
</script>

<style scoped>
</style>
@endsection