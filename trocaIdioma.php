<?php
session_start();

$_SESSION['idioma'] = $_GET['lang'];

$urlDeOrigem = $_SERVER['HTTP_REFERER'];

header('Location: '.$urlDeOrigem);
?>