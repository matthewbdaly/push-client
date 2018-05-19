<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\MPNS;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MPNSSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MPNS::class);
    }
}
