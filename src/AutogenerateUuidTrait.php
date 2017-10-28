<?php

namespace LaravelUuid;

use Ramsey\Uuid\Uuid;

/**
 * Trait AutogenerateUuidTrait
 *
 * Use this to allow Eloquent models to generate UUID automatically
 *
 * Presumptions:
 * - UUID field called "uuid"
 * - UUID v4 is used
 *
 * Feel free to create your own trait or implement `boot` method in model class directly
 * if any of the above does not meet your requirements
 *
 * @package LaravelUuid
 */
trait AutogenerateUuidTrait
{
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            if ($model->isClean('uuid')) {
                $model->uuid = Uuid::uuid4()->toString();
            }
        });
    }
}
