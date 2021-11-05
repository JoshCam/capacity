<a href="{{ route('clubs.show', $club) }}" class="club-card">
  <div class="card club-card">
    <img src="{{ $club->image }}" class="card-img-top club-card-img" style="height: 200px; object-fit:cover;" alt="Club Image">
    <div class="card-body">
      <h5 class="card-title">{{ $club->name }}</h5>
      <p class="card-text">capacity: {{ $club->occupancy }}/{{ $club->capacity }}</p>
    </div>
  </div>
</a>
