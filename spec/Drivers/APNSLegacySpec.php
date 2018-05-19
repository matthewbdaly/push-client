<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\APNSLegacy;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class APNSLegacySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(APNSLegacy::class);
    }
}
