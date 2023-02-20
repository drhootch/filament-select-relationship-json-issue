> This Repo contains minimal reproduction of issue in Filament/Forms/Components/Select when using relationship with json field value.

An error Undefined property: stdClass:: is thrown when trying to access json value with '->'.

>Install this project as usual

```bash
composer isntall &&
php artisan migrate &&
php artisan db:seed &&
php artisan serve
```
> code contains in this file `App\Filament\Resources\UsesResource.php`.
