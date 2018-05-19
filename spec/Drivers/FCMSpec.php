<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\FCM;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FCMSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FCM::class);
    }

    function it_implements_driver_interface()
    {
        $this->shouldImplement('Matthewbdaly\PushNotification\Contracts\Driver');
    }
}
