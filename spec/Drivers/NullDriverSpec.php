<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\NullDriver;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;

class NullDriverSpec extends ObjectBehavior
{
    function let(HttpClient $client, MessageFactory $messageFactory)
    {
        $this->beConstructedWith($client, $messageFactory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(NullDriver::class);
    }

    public function it_implements_interface()
    {
        $this->shouldImplement('Matthewbdaly\PushNotification\Contracts\Driver');
    }

    function it_gets_name()
    {
        $this->getName()->shouldReturn('NullDriver');
    }

    function it_gets_base_url()
    {
        $this->getBaseUrl()->shouldReturn(null);
    }

    function it_returns_a_response()
    {
        $msg = [];
        $this->sendRequest($msg)->shouldReturnAnInstanceOf('Psr\Http\Message\ResponseInterface');
    }
}
