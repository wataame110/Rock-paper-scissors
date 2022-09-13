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
        <h1>いざ！じゃんけんTime！</h1><br>
        出す手を選んで勝負してください。
        <div class="form-box">
            <form action="battle.php" method="post">
                <div class="aaa">
                    <label>
                        <input type="radio" title="playerHand" name="playerHand" value="グー" checked>グー <p class="img"><img src="img/hand-rock-regular.svg" alt="グー"></p>
                    </label>
                    <label>
                        <input type="radio" title="playerHand" name="playerHand" value="チョキ" checked>チョキ <p class="img"><img src="img/hand-peace-regular.svg" alt="チョキ"></p>
                    </label>
                    <label>
                        <input type="radio" title="playerHand" name="playerHand" value="パー" checked>パー <p class="img"><img src="img/hand-paper-regular.svg" alt="パー"/></p>
                    </label>
               </div>
                <button type="submit" class="battle-button">いざ！勝負！</button>
            </form>
        </div>
    </main>
    <footer>
        <small>&copy;Student X</small>
    </footer>
</div>
</body>
</html>