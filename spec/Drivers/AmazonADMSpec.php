<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\AmazonADM;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AmazonADMSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AmazonADM::class);
    }
}
