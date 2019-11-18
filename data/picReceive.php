<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>受信</h1>


    <?php
    $err = array();
    $img = $_FILES['img'];
    var_dump($img);

    move_uploaded_file($img['tmp_name'], './img/'.$img['name']);
    
    ?>
    <h1>jyushinn</h1>
</body>

</html>