<?php

use namePlayer\TextyShare\GenerateContent;
use namePlayer\TextyShare\TextyshareUtils;

if(isset($_POST['contentTextInput'], $_POST['contentAuthorInput'], $_POST['contentTitleInput'])) {

    $generator = new GenerateContent();
    $utils = new TextyshareUtils();

    $generator->setTitle($_POST['contentTitleInput']);
    $generator->setAuthor($_POST['contentAuthorInput']);
    $generator->setText($_POST['contentTextInput']);
    $saveName = $utils->generateRandomString(8);

    $data = $generator->generateJsonFromData();

    if(($generator->saveDataToJson($data, $saveName)) && ($generator->saveText($saveName))) {
        echo 'Success. File: <a href="'.$router->readAndOutputRequestedPath() . '/read/' . $saveName . '">' . $router->readAndOutputRequestedPath() . '/read/' . $saveName . '</a>';
    } else {
        echo 'Error';
    }

}

require_once TEMPLATE_DIR.'/page/home.php';