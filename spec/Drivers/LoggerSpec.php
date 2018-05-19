<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\Logger;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LoggerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Logger::class);
    }
}
