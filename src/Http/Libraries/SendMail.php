<?php

namespace Sovannrach\Notification\Http\Libraries;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class SendMail
{
    public static function send($data)
    {

        $client=new Client;
        $response = $client->request('POST', config('notification.base_url').'/api/send-email', [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '. Helper::getToken(),
            ],
            'form_params' => $data,
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}
