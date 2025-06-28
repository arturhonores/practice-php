<?php
require './vendor/autoload.php';
session_start();

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
            crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php include './includes/navbar.php' ?>
<div class="container">
    <h1>Mis notas</h1>
    <div class="d-flex gap-4">
        <?php if (isset($_SESSION['notes'])): ?>
            <?php foreach ($_SESSION['notes'] as $notes): ?>
                <a class="btn btn-outline-primary" href="/views/note.php?id=<?= $notes->id ?>">
                    <div class="text-start" style="width: 18rem;">
                        <p class=""><?= $notes->title ?></p>
                        <p class=""><?= $notes->body ?></p>
                    </div>
                </a>
            <?php endforeach ?>
        <?php else: ?>
            <p>No hay notas</p>
        <?php endif ?>
    </div>
</div>
</body>
</html>