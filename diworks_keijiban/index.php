<!doctype html>
<html lang="ja">
    
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
    
    
    
  <header>
      
    <div class="logo">
      <img src="img/diblog_logo.jpg">
    </div>
      
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>D.I.Blogについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
    
  </header>
    
    
    
  <main>
      
    <div class="main-container">
  
      <div class="left">
          
        <h1>プログラミングに役立つ掲示板</h1>
          
          
        <form method="post" action="insert.php">
            
            <h2>入力フォーム</h2>
            
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="40"name="handlename" maxlength="20">
            </div>
            
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="40"name="title" maxlength="40">
            </div>
            
            <div>                                                        
                <label>コメント</label>
                <br>
                <textarea name="comments" rows="8" cols="70" maxlength="200"></textarea>   
            </div>
            
            <br>
            
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
            
        </form>
        
        <?php
            mb_internal_encoding("utf-8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
            $stmt = $pdo->query("select * from diworks_keijiban");
          
             while ($row = $stmt->fetch()) {  
                 
//                if (empty($row['title']) || empty($row['comments']) || empty($row['handlename'])) {
//                    continue; 
//                }
                 
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
 
             }
        ?> 
        
      </div>
      
    </div>
      
         <div class="right">
        
        <h3>人気の記事</h3>
          <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタTops</li>
            <li>HTMLの基礎</li>
          </ul>
        
        <h3>オススメリンク</h3>
          <ul>
            <li>ディーアイワークス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braketsのダウンロード</li>
          </ul>
        <h3>カテゴリ</h3>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
        
      </div>

    
  </main>
    
    
    
  <footer>
    
    <div class="word">
      Copyroght D.I.works | D.I.blog is the one which provides A to Z about programming
    </div>
  </footer>
  
</html>