# Lumen Routes List Display

[![Total Downloads](https://poser.pugx.org/appzcoder/lumen-route-list/d/total.svg)](https://packagist.org/packages/appzcoder/lumen-route-list)
[![Latest Stable Version](https://poser.pugx.org/appzcoder/lumen-route-list/v/stable.svg)](https://packagist.org/packages/appzcoder/lumen-route-list)
[![Latest Unstable Version](https://poser.pugx.org/appzcoder/lumen-route-list/v/unstable.svg)](https://packagist.org/packages/appzcoder/lumen-route-list)
[![License](https://poser.pugx.org/appzcoder/lumen-route-list/license.svg)](https://packagist.org/packages/appzcoder/lumen-route-list)


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
