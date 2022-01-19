<?php

namespace App\Jobs;

use App\Models\Club;
use App\Services\Sms\SmsSender;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class NotifyUsersOfCapacity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $club;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Club $club)
    {
        $this->club = $club;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(SmsSender $sender)
    {
        // Log::info("Hurry " . $this->club->name . " is filling up fast!");
        $sender->sendSms('00447399096604', $this->getMessage());
    }

    private function getMessage()
    {
        return "Hurry " . $this->club->name . " is filling up fast!";
    }
}
