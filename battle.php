<?php
/*
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$playerHandに代入してください
(3) コンピューターの手は$pcHandに代入してください
*/

// ここから処理を記述
// じゃんけんの手を配列に代入
$hands = ['グー', 'チョキ', 'パー'];
$cardimgc = [
    'グー'=>'グー<img src="img/hand-rock-regular.svg" alt="グー"/>',
    'チョキ'=>'チョキ<img src="img/hand-peace-regular.svg" alt="チョキ"/>',
    'パー'=>'パー<img src="img/hand-paper-regular.svg" alt="パー"/>'
];

// プレイヤーの手がPOSTされたら
if (isset($_POST['playerHand'])) {
    // プレイヤーの手を代入
    $playerHand = $_POST['playerHand'];

    // PCの手をランダムで選択
    $key = array_rand($hands);
    $pcHand = $hands[$key];

    // 勝敗を判定
    if ($playerHand == $pcHand) {
        $result ='あいこ';
    } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result = '勝ち';
    } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result = '勝ち';
    } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="header-logo">暇人のじゃんけんゲーム</div>
    </header>
    <main>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <p class="result-word"><?= $result ?>！</p><br><br>

            <div id="kekka">
            <div>あなた：<div class="img"><?= $cardimgc[$playerHand] ?></div></div>
            <div>コンピューター：<div class="img"><?= $cardimgc[$pcHand] ?></div></div>
            </div>

            <div class="form-box">
            <form action="index.html" method="post">
                </label>
                <button type="submit" class="battle-button">もう一回勝負する</button>
            </form>
        </div>
        </div>
    </main>
    <footer>
        <small>&copy;Student X</small>
    </footer>
</div>
</body>
</html>