<! doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog　掲示板</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="4eachblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <h1>プログラミングに役立つ掲示板</h1>
    
    <div class="main-conteiner">
      <div class="left">
        <form method="post" action="insert.php" >
            <h3>入力フォーム</h3><br>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" name="handlname" size="40">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" name="title" size="40">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea type="text" name="comments" rows="5" cols="60"></textarea>
                </div>
                <div>
                <input type="submit" class="submit" value="投稿する">
                </div>
        </form>
          <?php
           mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
            $stmt = $pdo->query("select * from 4each_kejiban");
          
          while($row = $stmt->fetch()){
              
              echo "<div class='title1'>";
              echo "<h3>".$row['title']."</h3>";
              echo "<div class='contents'>";
              echo $row['comments'];
              echo "<div class='handlname'>posted by".$row['handlname']."</div>";
              echo "</div>";
              echo "</div>";
          }
          ?>
          
      </div>
            <div class="right">
                <h3>人気の記事</h3>
                <ul>
                    <li>PHPのオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        
        <footer>
            <p>copyright (c) internous | 4each blog the which provides A to Z programming.</p>
        </footer>
    </div>
    </main>
</body>
</html>