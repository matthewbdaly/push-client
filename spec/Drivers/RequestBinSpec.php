<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\RequestBin;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RequestBinSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RequestBin::class);
    }
}
