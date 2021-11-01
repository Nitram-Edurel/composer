<?php

use App\Wcs\Hello;

require_once realpath('../vendor/autoload.php');

$hello = new Hello;
echo $hello->talk();
