<?php

namespace Firstphp\Icelog\Facades;

use Illuminate\Support\Facades\Facade;

class IcelogFactory extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'IcelogService';
    }

}

