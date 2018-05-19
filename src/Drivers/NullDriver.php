<?php

namespace Matthewbdaly\PushNotification\Drivers;

use Matthewbdaly\PushNotification\Contracts\Driver;

class NullDriver extends Base implements Driver
{
    protected $name = "NullDriver";

    protected $baseUrl = null;

    public function sendRequest($msg)
    {
        return true;
    }
}
