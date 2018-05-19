<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\FCM;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class FCMSpec extends ObjectBehavior
{
    function let(HttpClient $client, MessageFactory $messageFactory)
    {
        $this->beConstructedWith($client, $messageFactory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(FCM::class);
    }

    function it_implements_driver_interface()
    {
        $this->shouldImplement('Matthewbdaly\PushNotification\Contracts\Driver');
    }

    function it_gets_name()
    {
        $this->getName()->shouldReturn('FCM');
    }
}
