<?php
mb_internal_encoding("UTF-8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;charset=utf8", "root", "");

$pdo->exec("INSERT INTO  diworks_keijiban(handlename, title, comments)
VALUES (
    '" . $_POST['handlename'] . "',
    '" . $_POST['title'] . "',
    '" . $_POST['comments'] . "'
)");

header("Location: http://localhost/diworks_keijiban/index.php");

?>