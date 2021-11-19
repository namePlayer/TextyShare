<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="<?= $reader->getDocumentJsonAsObject()->author ?>">
    <meta name="description" content="View the Post by <?= $reader->getDocumentJsonAsObject()->author ?> » With <?= PAGE_TITLE ?> you can share your texts and style them with markdown. ">
    <meta name="generator" content="<?= PAGE_TITLE ?>">

    <style>
        img {
            max-width: 100%;
        }
    </style>
    <title><?= PAGE_TITLE ?> | <?= $reader->getDocumentJsonAsObject()->title ?></title>
    <link rel="stylesheet" href="<?= $router->readAndOutputRequestedPath() ?>/asset/css/bootstrap.min.css">
</head>
<body>

    <?= $templateEngine ->render('navigation', ['router' => $router]) ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <b><?= $reader->getDocumentJsonAsObject()->title ?></b> <br>
                <small class="text-muted">By <b><?= $reader->getDocumentJsonAsObject()->author ?></b>. Posted at <?= date('d.m.Y H:i', $reader->getDocumentJsonAsObject()->posted) ?> </small>
                <hr>
                <?= $markdownFromDocumentAsHtml ?>
            </div>
            <div class="col-md-4">
                <?= $templateEngine->render('sidebar', ['router' => $router]) ?>
            </div>
        </div>
    </div>

</body>
</html>