<?php

namespace AM2Studio\LaravelAdminForm;

use Illuminate\Support\Facades\Facade;

class AdminFormFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AdminForm';
    }
}
