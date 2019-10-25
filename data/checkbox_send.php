<?php
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<h1>チェックボックスを使ったフォーム</h1>
<p>好きな色を選択してください</p>
<form action="checkbox_receive.php" method="post">
    <p>
    <input type="checkbox" name="colors[]" value="青">青
    <input type="checkbox" name="colors[]" value="赤">赤
    <input type="checkbox" name="colors[]" value="黃">黃
    <input type="checkbox" name="colors[]" value="緑">緑
    <input type="checkbox" name="colors[]" value="紫">紫
    <input type="checkbox" name="colors[]" value="白">白
    <input type="checkbox" name="colors[]" value="橙">橙
    </p>
    <input type="submit">
</form>
</body>

</html>