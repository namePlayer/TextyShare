<?php

use namePlayer\TextyShare\ReadContent;
use Michelf\Markdown;

$request = CONTENT_DIR.'/'.$requestedContent.'.json';

try {
    $reader = new ReadContent($request);
} catch (Exception $e) {
    header("Location: ".$router->readAndOutputRequestedPath().'/');
    return;
}

$markdownFromJsonAsHtml = Markdown::defaultTransform($htmlPurifier->purify($reader->getDocumentJsonAsObject()->siteContent));

require_once TEMPLATE_DIR . '/page/readPostOutput.php';