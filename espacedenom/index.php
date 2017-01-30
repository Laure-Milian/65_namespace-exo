<?php

namespace Index {
	require 'vendor/autoload.php';
}

namespace Index\Bar {
	require 'src/Bar/Client.php';
	use LaureMilian\App\Bar\Client;
	$bar = new Client;
	echo $bar->render();
}

namespace Index\Foo {
	require 'src/Foo/Client.php';
	use LaureMilian\App\Foo\Client;
	$bar = new Client;
	echo $bar->render();
}



