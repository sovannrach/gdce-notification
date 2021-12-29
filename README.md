# GDCE Email Sender

## Description
This libraries is build for send notification to email

## Installation


Install the dependencies and devDependencies and start the server.

```sh
Update your composer to v2 : https://newbedev.com/shell-update-composer-2-ubuntu-code-example
cd laravel_project_path
composer require sovannrach/notification
```

Open .env file and add code

```sh
NOTIFICATION_URL=http://10.0.8.59:93
NOTIFICATION_CLIENT_ID=2
NOTIFICATION_SECRET_KEY=dl2wHbINSwSGHiugxYCb8UQ6HYVAk7O5i5iPlYxb
```

## Usage

```sh

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
```


## License

MIT