<html>
<head>
<meta charset="utf-8">
</head>
<body>
    <h1>受信</h1>
    

    <?php
    var_dump($_POST);
    $name = $_POST['user_name'];
    if ($_POST['radio'] === 1) {
        $hobby = 'otoko';
    }else {
        $hobby = 'onna';
    } ;
    $comment = $_POST['comment'];
    ?>
    <p>あなたの名前は: <?= $name; ?></p>
    <p>あなたの趣味は: <?= $hobby; ?></p>
    <p>あなたのkomentは: <?= nl2br( $comment ); ?></p>
    
</body>
</html>