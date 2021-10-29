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
        </div>
    </div>
</div>
@endforeach
