<?php
// postで送られてきたデータを取得する
$name = htmlspecialchars($_POST['name']);
$name_yomi = htmlspecialchars($_POST['name_yomi']);
$email = htmlspecialchars($_POST['email']);
$tel = htmlspecialchars($_POST['tel']);
$message = htmlspecialchars($_POST['message']);


// ====== 自動返信メールを送信(申し込み者へ) ===== //
$email_title = '【fuuri healing oracle】お問い合わせありがとうございます';
$email_body = <<<email
※このメールはシステムからの自動返信です

{$name}様

fuuri healing oracleです。
この度はお問合せいただきありがとうございます。
以下の内容でお問合せを受け付けいたしました。

◯日以内にご連絡いたしますので、
今しばらくお待ちくださいませ。

━━━━━━━ お問い合わせ内容 ━━━━━━

お名前
{$name}様

フリガナ
{$name_yomi}様

メールアドレス
{$email}

お電話番号
{$tel}

お問い合わせ内容
{$message}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━

============================

fuuri healing oracle

mail:xxx@sample.co.jp
サイトURL:http:www.sample.com

============================
email;

$email_from = 'From:xxx@sample.co.jp';

mb_internal_encoding("UTF-8");
mb_language("Japanese");

mb_send_mail($email, $email_title, $email_body, $email_from);


// ====== 自動返信メールを送信(担当者様へ) ===== //
$fuuri_email = 'taichi_howa@yahoo.co.jp';
$fuuri_email_title = '【fuuri】HPよりお問い合わせがありました';
$fuuri_email_body = <<<fuuri_mail_body

※このメールはシステムからの自動返信です

HPよりお問い合わせがありました。

◯日以内にご連絡差し上げることをお約束しています。
ご対応をよろしくお願いします。

━━━━━━━ お問い合わせ内容 ━━━━━━

お名前
{$name}様

フリガナ
{$name_yomi}様

メールアドレス
{$email}

お電話番号
{$tel}

お問い合わせ内容
{$message}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━

fuuri_mail_body;

mb_send_mail($fuuri_email, $fuuri_email_title, $fuuri_email_body, $email_from);
?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta情報 -->
    <title>お問い合わせ完了 | fuuri ~healing oracle~</title>
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
            <section class="sec_contact">
                <div class="title_comp">
                    <h2 class="section_title">お問い合わせ完了</h2>
                    <img src="img/fuuri_logo_base.png" alt="タイトル背景の丸" class="title_bg">
                </div>

                <div class="flow_area">
                    <ul>
                        <li>1.入力</li>
                        <li>2.確認</li>
                        <li class="current">3.送信</li>
                    </ul>
                </div>
                <div class="text">
                    <p>お問合せいただきありがとうございました。</p>
                    <p><?php echo $email; ?>宛に自動送信メールをお送りいたしました。</p>
                </div>

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