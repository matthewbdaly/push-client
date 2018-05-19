<?php

namespace spec\Matthewbdaly\PushNotification\Factories;

use Matthewbdaly\PushNotification\Factories\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Http\Discovery\Strategy\MockClientStrategy;
use Http\Discovery\HttpClientDiscovery;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class DriverFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DriverFactory::class);
    }

    function it_implements_factory_contract()
    {
        $this->shouldImplement('Matthewbdaly\PushNotification\Contracts\Factory');
    }

    function it_returns_fcm_driver()
    {
        HttpClientDiscovery::prependStrategy(MockClientStrategy::class);
        $id = 'cheesy-lentils-123456';
        $token = 'foo';
        $this->create($id, $token)->shouldReturnAnInstanceOf('Matthewbdaly\PushNotification\Drivers\FCM');
    }

    function it_accepts_params_for_fcm_driver(HttpClient $client, MessageFactory $messageFactory)
    {
        $id = 'cheesy-lentils-123456';
        $token = 'foo';
        $this->create($id, $token, $client, $messageFactory)->shouldReturnAnInstanceOf('Matthewbdaly\PushNotification\Drivers\FCM');
    }
}
