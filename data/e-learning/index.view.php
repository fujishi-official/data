<?php
?>

<html>

<head>
    <meta charset="utf-8">
    <style type="text/css">
        .center {
            text-align: center;
        }

        input {
            margin: 5px;
        }

        header {
            background-color: #5b5b5b;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>

<body>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>