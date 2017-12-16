<?php

use Creator\Application;
use Creator\Formatter\PlusFormatter;
use Creator\Formatter\CometFormatter;
use Creator\Formatter\ArcturusFormatter;

require 'vendor/autoload.php';

$creator = new Application();

$creator->pushFormatter(new ArcturusFormatter());
$creator->pushFormatter(new PlusFormatter());
$creator->pushFormatter(new CometFormatter());

$creator->run($_POST['formatter'], $_POST);
