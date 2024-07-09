* Required Installation

 1. --->
    composer require laravel/ui
    php artisan ui bootstrap --auth
 2. -->
     composer require spatie/laravel-permission

        \bootstrap\app.php
        ->withMiddleware(function (Middleware $middleware) {
            // ...
            $middleware->alias([
                'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
                'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
                'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
            ]);
        })
 3. --->
    composer require intervention/image-laravel
    
 4. --->
  composer require laravel/sanctum
  
 5. --->
   'providers' => [
        // ...
        Spatie\Permission\PermissionServiceProvider::class,
    ];

    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

find --> "psr-4": in composer.json 
"psr-4": {
    // ...
}
put this under psr
"files": ["app/Helpers/Helper.php"]