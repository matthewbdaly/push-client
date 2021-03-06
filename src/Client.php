<?php

namespace Matthewbdaly\PushNotification;

use Matthewbdaly\PushNotification\Contracts\Client as ClientInterface;
use Matthewbdaly\PushNotification\Contracts\Driver;

class Client implements ClientInterface
{
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver()
    {
        return $this->driver;
    }

    public function send($msg)
    {
        return $this->getDriver()->sendRequest($msg);
    }
}
