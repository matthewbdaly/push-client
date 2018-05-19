<?php

namespace spec\Matthewbdaly\PushNotification\Factories;

use Matthewbdaly\PushNotification\Factories\DriverFactory;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

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
}
