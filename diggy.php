#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

use Diggy\Command\Diggy;
use Diggy\Command\DiggyCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new DiggyCommand());

$application->run();
