<?php
// postで送られてきたデータを取得する
$daihyou = htmlspecialchars($_POST['daihyou']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);

echo $daihyou;
echo '<br>';
echo $email;
echo '<br>';
echo $comment;

// ====== 自動返信メールを送信 ===== //
$email_title = '【CHALON】お申し込みありがとうございます';
$email_body = <<<email
{$daihyou}様

洋菓子店CHALONです。
この度はお菓子教室へのお申し込みありがとうございます。
以下の内容で承りました。

代表者名
{$daihyou}様

メールアドレス
{$email}

ご質問
{$comment}

追って担当の者よりご連絡いたします。

=========================
洋菓子店CHALON

住所：東京都新宿区愛住町99
TEL：03-1234-5678
=========================
email;

$email_from = 'From:sample@chalon.sample.net';

mb_internal_encoding("UTF-8");
mb_language("Japanese");
/*
mb_send_mail('宛先','メールのタイトル','メールの本文','送信元（誰からのメールか、一応任意だけど書くべき）')

送信元はサーバーからだと、受け手のメーラーが迷惑メール判定してしまう場合があるので、身元をはっきり書いておくと◎
*/
mb_send_mail($email, $email_title, $email_body, $email_from);

// 担当者様への自動メール
$tantou = 'taichi_howa@yahoo.co.jp';
$tantou_title = '【CHALON】HPよりお菓子教室へのお申し込みがあります。';
$tantou_body = <<<tantou
HPよりお申し込みがありました。

□お申し込み内容
代表者名
{$daihyou}様

メールアドレス
{$email}

ご質問
{$comment}

追って担当者様から代表者様へのご連絡をお約束しています。
ご対応をよろしくお願いします。

tantou;

mb_send_mail($tantou, $tantou_title, $tantou_body, $email_from);
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
            <h1>送信</h1>
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
                    <li>2.確認</li>
                    <li class="current">3.送信</li>
                </ul>
            </div>
            <div class="form_area contact">
                <p>お申込みいただきありがとうございます。</p>
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