<?php

namespace Creator;

require 'vendor/autoload.php';

$creator = new Creator();

$creator->pushFormatter(new Formatter\ArcturusFormatter());

$creator->run('arcturus');
