<?php

// require_once('form.php');
$ID = $_POST['name'];
$PASS = $_POST['pass'];

$names = [
    'admin' => ['name' => '社長', 'teams' => '社長', 'pass' => '1234'],
    '1' => ['name' => '鈴木さん', 'teams' => '営業チーム', 'pass' => '1111'],
    '2' => ['name' => '高橋さん', 'teams' => '経理チーム', 'pass' => '2222'],
    '3' => ['name' => '山田さん', 'teams' => '営業チーム', 'pass' => '3333'],
    '4' => ['name' => '中村さん', 'teams' => '経理チーム', 'pass' => '4444'],
    '5' => ['name' => '山田さん', 'teams' => '総務チーム', 'pass' => '5555'],
];

$tasks = [
    '1' => ["task" => ["A社訪問", "B社資料送付"]],
    '2' => ["task" => ["帳簿処理", "請求書発行"]],
    '3' => ["task" => ["C社訪問", "D社資料送付", "E社資料送付"]],
    '4' => ["task" => ["請求書発行", "先月の締め"]],
    '5' => ["task" => ["求人開始", "退職予定者の処理作業"]],
];

echo $ID;


foreach ($names as $key => $value) {
    echo $key;
    if ($ID === $key && $PASS === $value['pass']) {
        echo $value['name'] . '<br>';

        echo $tasks[$key]['task'];
    } elseif ($_POST['name'] === $key && $_POST['pass'] !== $value['pass']) {
        echo 'パスワードが違います';
    }
}
