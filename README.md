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

If you want to config with your notification server, Open .env file and add code

```sh
NOTIFICATION_URL=xxxx
NOTIFICATION_CLIENT_ID=x
NOTIFICATION_SECRET_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxx
```

## Usage

```sh

use Sovannrach\Notification\Http\Libraries\SendMail;

public function sendMail () {
    
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