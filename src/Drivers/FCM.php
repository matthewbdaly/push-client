<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class FCM implements Driver
{
    protected $name = 'FCM';

    protected $baseUrl = 'https://fcm.googleapis.com/v1/{parent=projects/*}/messages:send';

    public function __construct(HttpClient $client, MessageFactory $messageFactory)
    {
        $this->client = $client;
        $this->messageFactory = $messageFactory;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sendRequest($msg)
    {
        return true;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
}
