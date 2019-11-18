<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <h1>POST練習フォーム</h1>
    <p>次のページにデータを渡す。</p>
    <!-- form -->
    <form action="./postReceive.php" method='POST'>
    <label>名前</label>
    <input type="text" name="user_name">
    <label>性別</label>
    <input type="radio" name="sex" value="1">男
    <input type="radio" name="sex" value="2">女
    <br>
    <label>趣味</label>
    <textarea name="comment" id="" cols="30" rows="4"></textarea>
    <input type="submit" value="確認する">
    </form>
</body>
</html>