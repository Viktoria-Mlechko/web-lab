<?php
session_start();

$_SESSION['id'] = null;
$_SESSION['email'] = null;
header('Location: Artists.php');