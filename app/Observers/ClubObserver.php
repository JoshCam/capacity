<?php

namespace App\Observers;

use App\Jobs\NotifyUsersOfCapacity;
use App\Models\Club;

class ClubObserver
{
    /**
     * Handle the Club "created" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function created(Club $club)
    {
        //
    }

    /**
     * Handle the Club "updated" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function updated(Club $club)
    {
        if ($club->occupancy == $club->capacity * 0.8) {
            NotifyUsersOfCapacity::dispatch($club);
        }
    }

    /**
     * Handle the Club "deleted" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function deleted(Club $club)
    {
        //
    }

    /**
     * Handle the Club "restored" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function restored(Club $club)
    {
        //
    }

    /**
     * Handle the Club "force deleted" event.
     *
     * @param  \App\Models\Club  $club
     * @return void
     */
    public function forceDeleted(Club $club)
    {
        //
    }
}
