<?php
require 'vendor/autoload.php';
require 'src/Bar/Client.php';

use LaureMilian\App\Bar\Client;

$bar = new Client;
echo $bar->render();