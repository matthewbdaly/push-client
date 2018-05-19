<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class FCM extends Base implements Driver
{
    protected $name = 'FCM';

    protected $id;

    public function __construct(string $id, HttpClient $client, MessageFactory $messageFactory)
    {
        $this->id = $id;
        $this->client = $client;
        $this->messageFactory = $messageFactory;
    }

    public function getBaseUrl()
    {
        return "https://fcm.googleapis.com/v1/projects/".$this->id."/messages:send";
    }

    public function sendRequest($msg)
    {
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $params = [
        ];
        $request = $this->messageFactory->createRequest(
            'POST',
            $this->getBaseUrl(),
            $headers,
            http_build_query($params),
            '1.1'
        );
        return $this->client->sendRequest($request);
    }
}
