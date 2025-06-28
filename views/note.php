<?php
require '../vendor/autoload.php';
session_start();

if (!isset($_GET['id'])){
    die('nota no encontrada');
}

$id = $_GET['id'];

$notes = $_SESSION['notes'] ?? [];

$note = null;
foreach ($notes as $n) {
    if ($n->id == $id) {
        $note = $n;
        break;
    }
}

if (!$note) {
    die('Nota no encontrada');
}

$title = $note->title;
$body = $note->body;

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
<?php
include '../includes/navbar.php';
?>
<div class="container">
    <h1 class="h5">Nota <?= $id ?></h1>
    <form class="container" action="/src/update_note.php" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="<?= $title ?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" name="body"><?= htmlspecialchars($body) ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


</body>
</html>
