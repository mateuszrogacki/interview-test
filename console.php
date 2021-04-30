#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Application\Console\CalculateGrantCommand;
use Symfony\Component\Console\Application;

$app = new Application('Console App', 'v1.0.0');
$app->add(new CalculateGrantCommand());
$app->run();