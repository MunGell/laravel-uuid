<?php

namespace LaravelUuid;

use Illuminate\Support\ServiceProvider;
use Ramsey\Uuid\Uuid;

class UuidServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['validator']->extend('uuid', function ($attribute, $value, $parameters, $validator) {
            return Uuid::isValid($value);
        });
    }
}
