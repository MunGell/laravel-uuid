<?php

namespace LaravelUuid;

/**
 * Trait UuidRoutableTrait
 *
 * Use this trait in your models to enable routing using uuid field.
 * This is helpful when you use Laravel model injection in your controller methods.
 *
 * @package LaravelUuid
 */
trait UuidRoutableTrait
{
    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
