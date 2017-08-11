![Make Artisan great again](hat.png)

# Fixes typos in Laravel artisan commands

It seems that some American developers spell words incorrectly, this package fixes all that :)

## Installation

You can install this package via composer:

``` bash
composer require vool/unamerican
```

Then register the service provider :

```php
// config/app.php

'providers' => [
    ...
    Vool\Unamerican\UnamericanServiceProvider::class,

];
```

## Usage

``` bash
php artisan optimise
``` 