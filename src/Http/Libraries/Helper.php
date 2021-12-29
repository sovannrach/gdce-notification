<?php

namespace Sovannrach\Notification\Http\Libraries;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class Helper
{
    public static function getToken()
    {

        if (Cache::has('notification_token')) {
            return Cache::get('notification_token');
        } else {
            
            $guzzle = new Client;

            $response = $guzzle->post(config('notification.base_url') . '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => config('notification.client_id'),
                    'client_secret' => config('notification.client_secret'),
                    'scope' => '',
                ],
            ]);

            $duration =  json_decode((string) $response->getBody(), true)['expires_in'];

            $token = json_decode((string) $response->getBody(), true)['access_token'];

            Cache::put('notification_token', $token, $duration);

            return $token;
        }
    }
}
