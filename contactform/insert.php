<?php
mb_internal_encoding("UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"]) || empty($_POST["mail"]) || empty($_POST["age"]) || empty($_POST["comments"])) {
        echo "すべての項目を入力してください。";
        exit;
    }
}


$pdo = new PDO("mysql:dbname=lesson01;host=localhost;charset=utf8", "root", "");

$pdo->exec("INSERT INTO contactform (name, mail, age, comments)
VALUES (
    '" . $_POST['name'] . "',
    '" . $_POST['mail'] . "',
    '" . $_POST['age'] . "',
    '" . $_POST['comments'] . "'
)");
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>お問合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
    
<body>
    <h1>お問合わせフォーム</h1>
    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。</p>
    </div>
</body>
</html>
