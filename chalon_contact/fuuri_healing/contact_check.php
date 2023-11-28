<?php
// postで送られてきたデータを取得する
$name = htmlspecialchars($_POST['name']);
$name_yomi = htmlspecialchars($_POST['name_yomi']);
$email = htmlspecialchars($_POST['email']);
$tel = htmlspecialchars($_POST['tel']);
$message = htmlspecialchars($_POST['message']);
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta情報 -->
    <title>お問い合わせ内容確認 | fuuri ~healing oracle~</title>
    <meta name="description" content="" />
    <!-- ogp -->
    <meta property="og:url" content="ページのURL" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:type" content="ページのタイプ" />
    <meta property="og:description" content="記事の抜粋" />
    <meta property="og:image" content="画像のURL" />
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:locale" content="ja_JP" />
    <!-- ファビコン -->
    <link href="img/fuuri_favicon.png" rel="icon" />
    <!-- Googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Kaisei+Opti:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- css -->
    <link rel="stylesheet" href="css/common/reset.css">
    <link rel="stylesheet" href="css/common/common.css">
    <link rel="stylesheet" href="css/page/contact.css">
</head>

<body>
    <header>
        <a class="logo" href="./top.html"><img src="img/fuuri_logo.jpg" alt="風理ヒーリングオラクル"></a>
        <!-- グローバルナビ -->
        <nav class="gnav">
            <a class="logo" href="./top.html"><img src="img/fuuri_logo.jpg" alt="風理ヒーリングオラクル"></a>
            <ul class="gnav_menu">
                <li><a href="./top.html">トップ</a></li>
                <li><a href="./menu.html">個人セッション</a></li>
                <li><a href="./voice.html">お客様の声</a></li>
                <li><a href="./event.html">イベント</a></li>
                <li><a href="./column.html">コラム</a></li>
                <li><a href="./contact.html">お問い合わせ</a></li>
                <ul class="sns_list">
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/fuuri8282/"><img src="img/logo_ig.svg" alt="instagram"></a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://lin.ee/q2YHuEO"><img src="img/logo_line.svg" alt="公式LINE"></a></li>
                </ul>
            </ul>
        </nav>
        <!-- ハンバーガーメニュー -->
        <div class="ham">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div class="key">
        <h1 class="page_title">Contact</h1>
        <img src="img/key_contact_apply.jpg" alt="パワーストーンの画像">
    </div>
    <main>
        <div class="inner">
            <section class="sec_contact_check">
                <div class="title_comp">
                    <h2 class="section_title">お問い合わせ内容確認</h2>
                    <img src="img/fuuri_logo_base.png" alt="タイトル背景の丸" class="title_bg">
                </div>

                <div class="flow_area">
                    <ul>
                        <li>1.入力</li>
                        <li class="current">2.確認</li>
                        <li>3.送信</li>
                    </ul>
                </div>
                <div class="form_area">
                    <dl>
                        <dt>お名前</dt>
                        <dd><?php echo $name; ?></dd>
                        <dt>フリガナ</dt>
                        <dd><?php echo $name_yomi; ?></dd>
                        <dt>メールアドレス</dt>
                        <dd><?php echo $email; ?></dd>
                        <dt>電話番号</dt>
                        <?php if (!empty($tel)) : ?>
                            <dd><?php echo $tel; ?></dd>
                        <?php else : ?>
                            <dd>なし</dd>
                        <?php endif; ?>
                        <dt>お問い合わせ内容</dt>
                        <dd><?php echo $message; ?></dd>
                    </dl>
                </div>

                <form class="check_form" action="contact_thanks.php" method="post">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="name_yomi" value="<?php echo $name_yomi; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <?php if (!empty($tel)) : ?>
                        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
                    <?php else : ?>
                        <input type="hidden" name="tel" value="なし">
                    <?php endif; ?>
                    <input type="hidden" name="message" value="<?php echo $message; ?>">

                    <button class="btn" onClick="history.back();">戻る</button>
                    <button class="submit_btn check">送信</button>
                </form>

            </section>
            <!-- /section.column_detail -->
        </div>
        <!-- /div.inner -->
    </main>

    <footer>
        <nav class="gnav">
            <img class="footer_logo" src="img/fuuri_logo.jpg" alt="風理ヒーリングオラクル">
            <ul class="gnav_menu">
                <li><a href="./top.html">トップ</a></li>
                <li><a href="./menu.html">個人セッション</a></li>
                <li><a href="./voice.html">お客様の声</a></li>
                <li><a href="./event.html">イベント</a></li>
                <li><a href="./column.html">コラム</a></li>
                <li><a href="./contact.html">お問い合わせ</a></li>
                <ul class="sns_list">
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/fuuri8282/"><img src="img/logo_ig.svg" alt="instagram"></a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://lin.ee/q2YHuEO"><img src="img/logo_line.svg" alt="公式LINE"></a>
                    </li>
                </ul>
            </ul>
        </nav>
        <p><small>&copy; 2023 fuuri healing oracle</small></p>
    </footer>
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>