<?php
require '../vendor/autoload.php';
session_start();
use Luis\MarcosPractica1\Note;

$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';
$note = new Note($title, $body);
$_SESSION['notes'][] = $note;
header("Location: /index.php");
exit;