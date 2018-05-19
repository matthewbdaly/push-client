<?php

namespace Matthewbdaly\PushNotification\Contracts;

interface Driver
{
    public function sendRequest($msg);
}
