<?php

use Sovannrach\Notification\Http\Libraries\SendMail;


Route::get('/send-mail', function () {
    
    $data = [
        'subject' => 'Disable Broker Card',
        'title' => 'Mail Title...',
        'body' => 'Mail body content...',
        'to' => 'sovannrach@gmail.com'
    ];

    return SendMail::send($data);

});