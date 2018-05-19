<?php

namespace Matthewbdaly\PushNotification\Factories;

use Matthewbdaly\PushNotification\Contracts\Factory;
use Matthewbdaly\PushNotification\Drivers\FCM;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class DriverFactory implements Factory
{
    public static function create(string $id, string $token, HttpClient $client = null, MessageFactory $messageFactory = null)
    {
        $client = $client ?: HttpClientDiscovery::find();
        $messageFactory = $messageFactory ?: MessageFactoryDiscovery::find();
        return new FCM($id, $token, $client, $messageFactory);
    }
}
