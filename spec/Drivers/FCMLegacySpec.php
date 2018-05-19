<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\FCMLegacy;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FCMLegacySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FCMLegacy::class);
    }
}
