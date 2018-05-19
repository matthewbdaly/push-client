<?php

namespace spec\Matthewbdaly\PushNotification;

use Matthewbdaly\PushNotification\Client;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClientSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Client::class);
    }
}
