<?php

use namePlayer\TextyShare\TemplateEngine;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config/directory.php';
require_once CONFIG_DIR.'/config.php';

$templateEngine = new TemplateEngine();

$htmlPurifierConfig = HTMLPurifier_Config::createDefault();
$htmlPurifier = new HTMLPurifier($htmlPurifierConfig);

require_once __DIR__.'/routes.php';