# Lumen Routes List Display
Display The Lumen Registered Routes List Same As Laravel


## Installation

1. Run 
    ```
    composer require appzcoder/lumen-routes-list
    ```
    
2. Add service provider into **/bootstrap/app.php** file.
    ```php
    $app->register(Appzcoder\LumenRoutesList\RoutesCommandServiceProvider::class);
    ```
3. Run **composer update**

## Commands

```
php artisan route:list
```


##Author

<a href="http://www.sohelamin.com">Sohel Amin</a>
