<?php 

/**
 * Autoload files using Composer autoload
 * DIR constant used to avoid error if you call php file 
 * with command line without being in the folder src
 */
require_once __DIR__.'/../vendor/autoload.php';

use HelloWorld\SayHello;

echo SayHello::hello();
