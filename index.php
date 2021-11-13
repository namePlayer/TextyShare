<?php

use namePlayer\TextyShare\GenerateText;

require_once __DIR__.'/vendor/autoload.php';

$gentext = new GenerateText();

var_dump($gentext->helloWorld());