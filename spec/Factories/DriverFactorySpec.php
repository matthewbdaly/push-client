<?php

namespace spec\Matthewbdaly\PushNotification\Factories;

use Matthewbdaly\PushNotification\Factories\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Http\Discovery\Strategy\MockClientStrategy;
use Http\Discovery\HttpClientDiscovery;

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
        $args = [
            'id' => 'cheesy-lentils-123456'
        ];
        $this->create($args)->shouldReturnAnInstanceOf('Matthewbdaly\PushNotification\Drivers\FCM');
    }
}
