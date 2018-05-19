<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class FCM extends Base implements Driver
{
    protected $name = 'FCM';

    protected $baseUrl = 'https://fcm.googleapis.com/v1/{parent=projects/*}/messages:send';

    public function __construct(string $id, HttpClient $client, MessageFactory $messageFactory)
    {
        $this->client = $client;
        $this->messageFactory = $messageFactory;
    }

    public function sendRequest($msg)
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
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
