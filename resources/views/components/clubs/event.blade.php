@foreach ($events as $event)
    <div class="event-card card">
        <img
            src="{{ $event->image }}"
            class="rounded image-fluid event-image"
            alt="..."
        />
        <div class="event-text">
            <h6>{{ $event->name }}</h6>
            <p class="event-description">{{ $event->description }}</p>
            <div>
                <span>{{ $event->date }}</span>
                <span>{{ $event->start_time }}</span> -
                <span>{{ $event->finish_time }}</span>
                @if ($user->id ?? '' == $event->club_id)
                    <span><a href="{{ route('events.edit', $event) }}" class="btn btn-success">Edit</a></span>
                @else
                    <span><button class="btn btn-success">Buy Tickets</button></span>
                @endif
            </div>
        </div>
    </div>
@endforeach
