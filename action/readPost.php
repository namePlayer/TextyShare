<?php

use namePlayer\TextyShare\ReadContent;
use Michelf\Markdown;

$request = CONTENT_DIR.'/'.$requestedContent.'.';

try {
    $reader = new ReadContent($request);
} catch (Exception $e) {
    header("Location: ".$router->readAndOutputRequestedPath().'/');
    return;
}

$markdownFromDocumentAsHtml = Markdown::defaultTransform($htmlPurifier->purify($reader->getDocumentText()));

require_once TEMPLATE_DIR . '/page/readPostOutput.php';