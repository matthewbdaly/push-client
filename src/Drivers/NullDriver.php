<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class NullDriver extends Base implements Driver
{
    protected $name = "NullDriver";

    protected $baseUrl = null;

    public function __construct(HttpClient $client, MessageFactory $messageFactory)
    {
        $this->client = $client;
        $this->messageFactory = $messageFactory;
    }

    public function sendRequest($msg)
    {
        return true;
    }
}
