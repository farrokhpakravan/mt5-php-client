<?php

namespace Farrokhpakravan\Mt5PhpClient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Farrokhpakravan\Mt5PhpClient\Mt5PhpClient
 */
class Mt5PhpClientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MT5Client';
    }
}
