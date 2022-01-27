<?php


namespace App\Services\Sms;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsGlobalSender implements SmsSender
{

    public function sendSms(string $mobile, string $message)
    {
        Log::info('Using SmsGlobal to send SMS');

        $apiKey = env("SMS_GLOBAL_API_KEY");

        $response = Http::withHeaders([
                'Authorization' => $apiKey,
            ])->post('https://api.smsglobal.com/http-api.php', [
                'action' => 'sendsms',
                'user' => 'JoshCampden',
                'password' => env("SMS_GLOBAL_PASSWORD"),
                'to' => $mobile,
                'from' => "Emergency Alert",
                'text' => $message,
            ]);

        Log::info($response);
    }
}