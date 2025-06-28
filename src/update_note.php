<?php
require '../vendor/autoload.php';
session_start();

$id = $_POST['id'] ?? '';
$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';

$notes = $_SESSION['notes'] ?? [];

foreach ($notes as &$note) {
    if ($note->id == $id) {
        $note->title = $title;
        $note->body = $body;
        break;
    }
}
unset($note); // Buena práctica cuando usas referencias (&) en foreach

$_SESSION['notes'] = $notes;

header('Location: /index.php');
exit;