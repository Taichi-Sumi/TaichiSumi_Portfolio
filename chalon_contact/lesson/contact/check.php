<?php
// postで送られてきたデータを取得する
$daihyou = htmlspecialchars($_POST['daihyou']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

// フラグ処理
$flg = 0;
if (empty($daihyou)) {
    $flg = 1;
    $daihyou = '<span class="attention">代表者を入力してください</span>';
};

if (empty($email)) {
    $flg = 1;
    $email = '<span class="attention">メールアドレスを入力してください</span>';
};

if (empty($comment)) {
    $flg = 1;
    $comment = '<span class="attention">ご質問内容を入力してください</span>';
};

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>洋菓子店CHALON</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../../css/common/reset.css">
    <link rel="stylesheet" href="../../css/common/common.css">
    <link rel="stylesheet" href="../../css/common/under.css">
    <link rel="stylesheet" href="../../css/page/contact.css">
</head>

<body id="top">
    <header>
        <div class="inner">
            <p><a href="../"><img src="../../img/logo.png" alt="洋菓子店CHALON"></a></p>
            <div class="menu_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav>
                <ul>
                    <li><a href="#">当店について</a></li>
                    <li><a href="../../menu/">メニュー</a></li>
                    <li>
                        <a href="../index.html">お菓子教室</a>
                        <ul>
                            <li><a href="#">ご参加の流れ</a></li>
                            <li><a href="#">参加者の声</a></li>
                            <li><a href="./index.html">お申込み</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="under_title">
        <div class="inner">
            <h1>入力内容確認</h1>
        </div>
    </div>
    <div class="bread">
        <div class="inner">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="../index.html">お菓子教室</a></li>
                <li>お申し込み</li>
            </ul>
        </div>
    </div>

    <div class="wrapper">
        <main>
            <div class="flow_area">
                <ul>
                    <li>1.入力</li>
                    <li class="current">2.確認</li>
                    <li>3.送信</li>
                </ul>
            </div>
            <div class="form_area contact">
                <dl>
                    <dt>代表者のお名前</dt>
                    <dd><?php echo $daihyou; ?></dd>
                    <dt>メールアドレス</dt>
                    <dd><?php echo $email; ?></dd>
                    <dt>ご質問内容</dt>
                    <dd><?php echo $comment; ?></dd>
                </dl>
                <?php
                     if ($flg): ?>
                        <button type="button" onClick="history.back();">戻る</button>

                 <?php else: ?>
                <form action="thanks.php" method="post">
                    <input type="hidden" name="daihyou" value="<?php echo $daihyou; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="comment" value="<?php echo $comment; ?>">

                    <button type="button" onClick="history.back();">戻る</button>
                    <button class="btn">送信</button>
                </form>
                <?php endif; ?>
            </div>
        </main>
        <div class="side">
            <ul>
                <li><a href="#">お菓子教室</a></li>
                <li><a href="#">ご参加の流れ</a></li>
                <li><a href="#">参加者の声</a></li>
                <li class="current"><a href="#">お申し込み</a></li>
            </ul>
            <aside>
                <p><a href="#"><img src="../../img/bnr.jpg" alt=""></a></p>
            </aside>
        </div>
    </div>

    <footer>
        <div class="inner">
            <p class="footer_logo"><img src="../../img/logo_white.png" alt="洋菓子店CHALON"></p>
            <div class="footer_wrap">
                <div class="footer_left">
                    <ul>
                        <li><a href="#">当店について</a></li>
                        <li><a href="#">メニュー</a></li>
                        <li>
                            <a href="../index.html">お菓子教室</a>
                            <ul>
                                <li><a href="#">ご参加の流れ</a></li>
                                <li><a href="#">参加者の声</a></li>
                                <li><a href="./index.html">お申込み</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="footer_right">
                    <ul>
                        <li><a href="#"><img src="../../img/icon_fb.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="../../img/icon_tw.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="../../img/icon_insta.png" alt="instagram"></a></li>
                    </ul>
                    <dl>
                        <dt>Address</dt>
                        <dd>
                            <address>
                                〒160-0005<br>
                                東京都新宿区愛住町22<br>
                                第3山田ビル1F
                            </address>
                        </dd>
                    </dl>
                </div>
            </div>
            <p class="copy"><small>&copy; CHALON</small></p>
        </div>
    </footer>
    <p class="to_top">
        <a href="#top">
            <span class="material-icons">
                expand_less
            </span>
        </a>
    </p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>