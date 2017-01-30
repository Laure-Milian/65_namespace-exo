<?php

require 'vendor/autoload.php';

require 'src/Bar/Client.php';
require 'src/Foo/Client.php';

use LaureMilian\App\Bar\Client as Bar;
use LaureMilian\App\Foo\Client as Foo;

$foo = new Foo;
echo $foo->render();

$bar = new Bar;
echo $bar->render();




