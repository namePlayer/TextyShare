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

        <?= $templateEngine->outputAlerts($alerts) ?>

        <div class="row">
            <div class="col-8">
                <div class="card shadow">
                    <div class="card-header">
                        New Post
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="contentTitleInput" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="contentTitleInput" name="contentTitleInput">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="contentAuthorInput" class="form-label">Author</label>
                                        <input type="text" class="form-control" id="contentAuthorInput" name="contentAuthorInput">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="contentTextInput" class="form-label">Text</label>
                                        <textarea class="form-control" id="contentTextInput" name="contentTextInput" rows="5"></textarea>
                                        <small class="text-small text-muted">Text formatting can be done with Markdown</small>
                                    </div>
                                </div>
                                <div class="col-12"><button type="submit" class="btn btn-dark w-100">Save</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <?= $templateEngine->render('sidebar', ['router' => $router]) ?>
            </div>
        </div>
    </div>

</body>
</html>