<?php


namespace App\Services\Sms;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SmsGlobalSender implements SmsSender
{

    public function sendSms(string $mobile, string $message)
    {
        Log::info('Using SmsGlobal to send SMS');

        $apiKey = "346805f6b45c657bafd188f8e4767430";

        $response = Http::withHeaders([
                'Authorization' => $apiKey,
            ])->post('https://api.voodoosms.com/sendsms', [
                'to' => $mobile,
                'from' => "Emergency Alert",
                'msg' => $message,
            ]);

        Log::info($response);
    }
}