<?php
require_once 'db_config.php';
$op = new operations;
$op->delete($_GET['id']);
header('location:index.php');

?>