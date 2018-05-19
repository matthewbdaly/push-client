<?php

namespace spec\Matthewbdaly\PushNotification;

use Matthewbdaly\PushNotification\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Matthewbdaly\PushNotification\Contracts\Driver;

class ClientSpec extends ObjectBehavior
{
    function let(Driver $driver)
    {
        $this->beConstructedWith($driver);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }

    function it_implements_interface()
    {
        $this->shouldImplement('Matthewbdaly\PushNotification\Contracts\Client');
    }

    function it_gets_driver()
    {
        $this->getDriver()->shouldReturnAnInstanceOf('Matthewbdaly\PushNotification\Contracts\Driver');
    }
}
