<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\GCM;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GCMSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GCM::class);
    }
}
