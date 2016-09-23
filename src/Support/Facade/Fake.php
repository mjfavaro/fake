<?php

namespace Mjfavaro\Fake\Support\Facade;

use Illuminate\Support\Facades\Facade;

class Fake extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fake';
    }
}