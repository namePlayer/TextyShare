<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= PAGE_TITLE ?> | Not Found</title>
    <link rel="stylesheet" href="<?= $router->readAndOutputRequestedPath() ?>/asset/css/bootstrap.min.css">
</head>
<body>

<?= $templateEngine ->render('navigation', ['router' => $router]) ?>

<div class="container w-75 mt-5">

    <h1>Post not Found (Error: 404)</h1>
    <p>This can occur for multiple reasons. Maybe the resource was deleted or somethings wrong with the System.</p>
    <small class="text-muted">Or maybe we didn't copy something correctly from Stackoverflow</small>

</div>

</body>
</html>