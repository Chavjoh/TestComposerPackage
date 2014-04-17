TestComposerPackage
===================

Test of a composer package creation.

## Package creation 

* Create ```src/``` folder. Used to store all folders and namespace for classes. 
* Create ```src/HelloWorld/``` folder. Used to store classes inside the namespace **HelloWorld**. 
* Create ```src/HelloWorld/SayHello.php``` class file. Used to say hello to the world !

```php
namespace HelloWorld;

class SayHello
{
  public static function hello()
  {
    return 'Hello World !';
  }
}
```

* [Install composer](https://getcomposer.org/download/) if it's not already done. 
* Start a command line, execute ```composer init``` in the root directory and answer to the questions to create json configuration file. 
* Add autoload attribute for our HelloWorld namespace in ```composer.json```. We use here [PSR-0 autoloading standard](https://getcomposer.org/doc/04-schema.md#autoload).

```json
"autoload": {
  "psr-0": {
    "HelloWorld": "src/"
  }
}
```

* Add PHP version requirement in ```composer.json```.

```json
"require": {
    "php": ">=5.3.0"
}
```

## Testing

* Start a command line and execute ```composer install```. It will create autoloading files in ```vendor/``` folder.
* Create a PHP test file. This file must include ```vendor/autoload.php``` and use the namespace ```HelloWorld\SayHello```.

```php
require_once __DIR__.'/../vendor/autoload.php';

use HelloWorld\SayHello;

echo SayHello::hello();
```

* Start a command line and execute ```php test.php```. You should see **Hello World !**
