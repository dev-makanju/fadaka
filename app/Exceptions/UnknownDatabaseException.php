<?php

namespace App\Exceptions;

use Exception;

class UnknownDatabaseException extends Exception
{
    /***
     * return or logged exception
     * 
     * @return void
     * */
    public function report()
    {
        \Log::debug('Oops!! , Database is currently down');
    }
}
