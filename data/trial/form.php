<?php
// $names = [
//     'name' => ['社長','鈴木さん','高橋さん','山田さん','中村さん','山田さん'],
//     'teams' => ['社長','営業チーム','経理チーム','営業チーム','経理チーム','総務チーム'],
//     'pass' => [1234,1111,2222,3333,4444,5555],
// ];


$names = [
   'admin'=> ['name' => '社長', 'teams' => '社長', 'pass' => 1234],
   '1' =>  ['name' => '鈴木さん', 'teams' => '営業チーム', 'pass' => 1111],
   '2' =>  ['name' => '高橋さん', 'teams' => '経理チーム', 'pass' => 2222],
   '3' =>  ['name' => '山田さん', 'teams' => '営業チーム', 'pass' => 3333],
   '4' =>  ['name' => '中村さん', 'teams' => '経理チーム', 'pass' => 4444],
   '5' =>  ['name' => '山田さん', 'teams' => '総務チーム', 'pass' => 5555],
];

// var_dump($names);

session_start();
// if(isset($_SESSION['name'])){
//     echo 'こんにちは'.$_SESSION['name'].'さん<br>';
//     exit;
// }

?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>ログイン画面</h1>
    <form action="task.php" method="post">
        <label for="name">名前</label>
        <select name="name">
            <?php
            foreach ($names as $key => $value) { ?>
                <option value="<?php echo $key; ?>"><?php echo $value['name']; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="pass">パスワード</label>
        <input type="password" maxlength="4" name="pass">
        <br>
        <button type="submit">sine in</button>
    </form>

</body>

</html>