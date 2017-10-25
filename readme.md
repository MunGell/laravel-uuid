# Laravel UUID helpers

Laravel package to simplify UUID implementation in Eloquent models.

Inspired by [webpaster/laravel-uuid](https://github.com/webpatser/laravel-uuid), 
but uses [ramsey/uuid](https://github.com/ramsey/uuid) for generation instead of custom build.

## Installation

```bash
composer install digitalie/laravel-uuid
```
## What is included

### Auto-generate UUID field value trait

`AutogenerateUuidTrait` when used in Eloquent model will auto-populate `uuid` field with UUID v4.

### Controller method model injection

`UuidRoutableTrait` when used in Eloquent model will modify the way Laravel finds models 
to inject into controller methods 

## License

MIT
