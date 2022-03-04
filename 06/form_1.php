<?php

$age = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['message'];
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>POSTメソッド</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>
    </div>
    <p><?= "私は{$age}歳です" ?></p>
</body>

</html>