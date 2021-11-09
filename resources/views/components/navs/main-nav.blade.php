<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('clubs.index') }}">Capacity</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clubs.index') }}"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Near By</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favourites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recommended</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Map</a>
                </li>
            </ul>

            <div id="search-app">
                <form class="d-flex mx-auto">
                    <div class="dropdown">
                      <input
                          v-model="search"
                          class="form-control me-2"
                          type="search"
                          placeholder="Search"
                          aria-label="Search"
                      />
                      <ul class="dropdown-menu" :class="{show : clubSuggestions.length > 0}" aria-labelledby="dropdownMenuButton1">
                        <li v-for="club in clubSuggestions">
                          <a class="dropdown-item" :href="getClubUrl(club)">@{{ club.name }}</a>
                        </li>
                      </ul>
                    </div>
                </form>
            </div>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login /</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"
                        >Register</a
                    >
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
