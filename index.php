<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>

        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1; host=localhost;", "root", "");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
  
        
        <header>
            <img src="4eachblog_logo.jpg" class="logo">
            <ul class="menu">
                <li class="list">トップ</li>
                <li class="list">プロフィール</li>
                <li class="list">4eachについて</li>
                <li class="list">登録フォーム</li>
                <li class="list">問い合わせ</li>
                <li class="list">その他</li>
            </ul>
        </header>
        
        <main>
            <div class=left>
                <h1>プログラミングに役立つ掲示板</h1>
                <div class="contents">
                    <h2 class="form">入力フォーム</h2>
                    <form action="insert.php" method="post">
                        <p>
                        ハンドルネーム<br>
                        <input type="text" name="handlename">
                        </p>
                        <p>
                        タイトル<br>
                        <input type="text" name="title">
                        </p>
                        <p>
                        コメント<br>
                        <textarea rows="7" cols="40" name="comments"></textarea>
                        </p>
                        <input type="submit" value="送信する" class="button">
                    </form>
                </div>
                
                <?php
                
                while($row = $stmt->fetch()){
                    echo"<div class='contents'>";
                        echo"<h2 class='title'>".$row['title']."</h2>";
                        echo"<p>".$row['comments']."<p>";
                        echo"<p class='handlename'>posted by ".$row['handlename']."<p>";
                    echo"</div>";
                }
                
                ?>
                
            </div>
            
            <div class="right">
                <h2 class="title">人気の記事</h2>
                    <p class="link">PHPオススメ本</p>
                    <p class="link">PHP MyAdminの使い方</p>
                    <p class="link">今人気のエディタ Top5</p>
                    <p class="link">HTMLの基礎</p>
                
                <h2 class="title">オススメリンク</h2>
                    <p class="link">インターノウス株式会社</p>
                    <p class="link">XAMPPのダウンロード</p>
                    <p class="link">Eclipseのダウンロード</p>
                    <p class="link">Bracketsのダウンロード</p>
                
                <h2 class="title">カテゴリ</h2>
                    <p class="link">HTML</p>
                    <p class="link">PHP</p>
                    <p class="link">MySQL</p>
                    <p class="link">JavaScript</p>
            </div>
        </main>
        
        <footer>
            <div class="footer">
                copyright © internous | 4each blog the which provides A to Z about programming.
            </div>
        </footer>
    </body>
    
</html>