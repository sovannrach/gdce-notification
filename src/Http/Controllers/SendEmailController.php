<?php

namespace Sovannrach\Notification\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sovannrach\Notification\Http\Libraries\Helper;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {

        $client=new Client;
        $response = $client->request('POST', config('notification.base_url').'/api/send-email', [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '. Helper::getToken(),
            ],
            'form_params' => [
                'subject'=> 'Disable Broker Card',
                'title' => 'authorization_code',
                'body' => 'client-id',
                'to' => 'sovannrach@gmail.com',
            ],
        ]);

        return json_decode((string) $response->getBody(), true);
    }
}
