<?php

namespace spec\Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Drivers\FCM;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class FCMSpec extends ObjectBehavior
{
    function let(HttpClient $client, MessageFactory $messageFactory)
    {
        $id = 'cheesy-lentils-123456';
        $this->beConstructedWith($id, $client, $messageFactory);
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

    function it_gets_base_url()
    {
        $this->getBaseUrl()->shouldReturn('https://fcm.googleapis.com/v1/{parent=projects/*}/messages:send');
    }

    function it_returns_a_response(HttpClient $client, MessageFactory $messageFactory, RequestInterface $request, ResponseInterface $response, StreamInterface $stream)
    {
        $id = 'cheesy-lentils-123456';
        $this->beConstructedWith($id, $client, $messageFactory);
        $params = [
        ];
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $messageFactory->createRequest(
            'POST',
            'https://fcm.googleapis.com/v1/{parent=projects/*}/messages:send',
            $headers,
            http_build_query($params),
            '1.1'
        )->willReturn($request);
        $client->sendRequest($request)->willReturn($response);
        $msg = [];
        $this->sendRequest($msg)->shouldReturn($response);
    }
}
