<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;

abstract class Base implements Driver
{
    public function getName()
    {
        return $this->name;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }
}
