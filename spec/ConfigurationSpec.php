<?php

namespace spec\Matthewbdaly\PushNotification;

use Matthewbdaly\PushNotification\Configuration;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConfigurationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Configuration::class);
    }

    function it_sets_and_gets_id()
    {
        $id = 'cheesy-lentils-123456';
        $this->getId()->shouldReturn(null);
        $this->setId($id)->shouldReturn($this);
        $this->getId()->shouldReturn($id);
    }
}
