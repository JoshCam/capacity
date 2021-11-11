<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('clubs.index')}}">Capacity</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.show') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('clubs.edit', $club) }}">Edit Club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('events.create') }}">New Event</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Stats</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.showClicker') }}">Clicker</a>
        </li>
      </ul>
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
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>