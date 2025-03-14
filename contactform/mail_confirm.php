<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>お問合わせ内容確認</h1>
    <div class="confirm">
        <p>お問い合わせ内容はこちらで<br>よろしければ「送信する」ボタンを押してください。</p>
        
        <p>名前<br>
        <?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>
        </p>
        
        <p>メールアドレス<br>
        <?php echo htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>年齢<br>
        <?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); ?> 歳
        </p>

        <p>コメント<br>
        <?php echo nl2br(htmlspecialchars($_POST['comments'], ENT_QUOTES, 'UTF-8')); ?>
        </p>

        <form action="index.html">
            <input type="submit" class="button1" value="戻って修正する">
        </form>

        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="mail" value="<?php echo htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="comments" value="<?php echo htmlspecialchars($_POST['comments'], ENT_QUOTES, 'UTF-8'); ?>">
        </form>
    </div>
</body>
</html>
