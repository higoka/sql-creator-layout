<?php

use Creator\Application;
use Creator\Formatter\ArcturusFormatter;

require 'vendor/autoload.php';

$creator = new Application();

$creator->pushFormatter(new ArcturusFormatter());

$creator->run($_POST['formatter'], $_POST);
