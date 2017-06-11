<?php

use Creator\Creator;
use Creator\Formatter\ArcturusFormatter;

require 'vendor/autoload.php';

$creator = new Creator();

$creator->pushFormatter(new ArcturusFormatter());

$creator->run('arcturus', $_POST);
