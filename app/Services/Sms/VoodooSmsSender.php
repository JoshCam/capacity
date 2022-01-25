<?php


namespace App\Services\Sms;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VoodooSmsSender implements SmsSender
{
    public function sendSms(string $mobile, string $message)
    {
        Log::info('Using Voodoo to send SMS');

        $apiKey = "0RsxFYTaP8mzfej2DmJKHFFLd1bteYyVrgIx6bNMZzB6Uk";

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