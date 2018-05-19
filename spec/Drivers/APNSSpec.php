<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\APNS;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class APNSSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(APNS::class);
    }
}
