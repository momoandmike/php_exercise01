<?php

$age = '';
$err_msg = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['message'];

    if (empty($age)) {
        $err_msg = '年齢を入力してください。';
    }
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
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
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