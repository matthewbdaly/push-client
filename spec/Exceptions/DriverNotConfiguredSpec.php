<?php

namespace spec\Matthewbdaly\PushNotification\Exceptions;

use Matthewbdaly\PushNotification\Exceptions\DriverNotConfigured;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Exception;

class DriverNotConfiguredSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(DriverNotConfigured::class);
    }

    function it_is_an_exception()
    {
        $this->shouldBeAnInstanceOf(Exception::class);
    }
}
