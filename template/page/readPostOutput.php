<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= PAGE_TITLE ?> | Home</title>
    <link rel="stylesheet" href="<?= $router->readAndOutputRequestedPath() ?>/asset/css/bootstrap.min.css">
</head>
<body>

    <?= $templateEngine ->render('navigation', ['router' => $router]) ?>

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        Content of <b><?= $reader->getDocumentJsonAsObject()->title ?></b>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4>What is this?</h4>
                <p>With this service you can share Text </p>
            </div>
        </div>
    </div>

</body>
</html>