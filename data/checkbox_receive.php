<?php
$colors = $_POST[ 'colors' ];
var_dump($colors);
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<h1>受信Page</h1>
<h3>好きな色</h3>

<ul>
    <?php foreach ($colors as $var) { ?>
        <li><?php echo htmlspecialchars($var, ENT_QUOTES, 'utf-8') ; ?></li>
    <?php } ?>
</ul>
<p>あなたの好きな色は<?php echo implode('と', $colors); ?></p>
</body>

</html>