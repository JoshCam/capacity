<nav class="search-app navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a
            class="navbar-brand"
            href="{{ route('clubs.index') }}"
            style="margin-right:0;"
        >Capacity</a>
            <div class="d-lg-none">
                <form class="d-flex mx-auto">
                    <div class="dropdown">
                          <input
                            style="width: 130px; margin-left:0;"
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-sm-start" aria-labelledby="dropdownMenuButton1">
                            <li v-for="option in sortByOptions">
                                <a class="dropdown-item" :href="getSortingUrl(option)">@{{ option.display }}</a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('clubs.index') }}"
                        >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('clubs.nearBy') }}">Near By</a>
                </li> -->
            </ul>

            <div class="d-none d-lg-inline">
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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16">
                                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                <path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li v-for="option in sortByOptions">
                                <a class="dropdown-item" :href="getSortingUrl(option)">@{{ option.display }}</a>
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
