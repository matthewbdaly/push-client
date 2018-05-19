<?php

namespace Matthewbdaly\PushNotification;

use Matthewbdaly\PushNotification\Contracts\Client as ClientInterface;
use Matthewbdaly\PushNotification\Contracts\Driver;

class Client implements ClientInterface
{
    protected $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function getDriver()
    {
        return $this->driver;
    }
}
