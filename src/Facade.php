<?php


namespace SethPhat\:namespace;

use lluminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return ':facade';
    }
}
