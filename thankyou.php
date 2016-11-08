<?php
session_start();

/*****************************
   メール送信
*****************************/
mb_language("Japanese");
mb_internal_encoding("UTF-8");
// 宛先　↓以下の「$to」にデータを飛ばしたい先のメールアドレスを指定すると、メールが送信できます。
// 現在は、田呂丸さんのメールアドレスを指定しております。
// otoiawase.htmlで「送信する」ボタンを押すと、toiawase.phpにアクセスされ、その時点で「$to」で指定した
// メールアドレスにデータが飛ぶ仕組みになっています。

$to = "shiawaseninaru445@yahoo.co.jp";

// 差出人
$from ="<shiawaseninaru445@yahoo.co.jp>";

// 題名
$sbj .= "「サイト収集.com」に問い合わせがありました";

// 本文 ⇒ 以下の内容で、『住所（都道府県）』は削除し、代わりに『お問い合わせ内容』をメールで送信できるようにしてください。
$msg = "会社名\n";
$msg .= html_entity_decode($_POST['syamei'], ENT_QUOTES)."\n\n";
$msg .= "担当者名\n";
$msg .= html_entity_decode($_POST['tantou'], ENT_QUOTES)."\n\n";
$msg .= "メールアドレス\n";
$msg .= html_entity_decode($_POST['e-mail'], ENT_QUOTES)."\n\n";
$msg .= "電話番号\n";
$msg .= html_entity_decode($_POST['tel'], ENT_QUOTES)."\n\n";
$msg .= "お問い合わせ内容\n";
$msg .= html_entity_decode($_POST['otoiawase'], ENT_QUOTES)."\n\n";


// ヘッダ作成（以下はさわらないでください）
$header = "From: {$from}";
// 送信
mb_send_mail($to, $sbj , $msg , $header);
/*****************************
   メール送信「完了」
*****************************/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="ありがとうございました,ありがとうございます,Thankyou">
<meta name="description" content="お問い合わせくださいまして、誠にありがとうございます。今後ともサイト収集.comを何卒よろしくお願い申し上げます。">
<title>お問い合わせありがとうございます</title>
<link href="css/base.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="js/like-button.js"></script>
<script type="text/javascript" src="js/slow_hover.js"></script>
</head>

<body>
<div class="left-side">
<header>
<h1><a href="index.html">サイト収集.com</a></h1>
</header>
<article class="left1 dis">
<h1>【カテゴリー一覧】</h1>
<h2>ホームページ・WEBデザイン</h2>
<ul>
<li><a href="index.html">オンラインサービス</a></li>
<li><a href="design-camp.html">デザイン・デザイン会社</a></li>
<li><a href="building.html">建築・不動産</a></li>
<li><a href="fashion.html">ファッション</a></li>
<li><a href="beauty.html">ビューティー</a></li>
<li><a href="life.html">生活・旅行・交通・ホテル</a></li>
<li><a href="medical.html">医療</a></li>
<li><a href="food.html">飲食関連・食品</a></li>
<li><a href="blog.html">ポータル・ブログ</a></li>
<li><a href="game.html">ゲーム・音楽</a></li>
<li><a href="corporete.html">企業・法人・コーポレートサイト</a></li>
</ul>
<div class="like">
<p class="like2"><img src="imges/like-bottom.gif" alt="お気に入り"></p>
<input type="button" rel='sidebar' value="お気に入りに登録" onClick="toFavorite(location.href,document.title);">
</div><!--like終わり-->
</article>
</div><!--left-side終わり-->


<section>
<h1>お問い合わせありがとうございます</h1>
<p style="line-height:3.0em; padding-left:20px; font-size:16px;">この度は、サイト収集.comにお問い合わせくださいまして、誠にありがとうございます。<br>
１営業日～５営業日以内に、ご入力頂いた内容に大して、ご返答させて頂きます。<br>
（お問い合わせ内容により、ご回答が遅くなることや、ご回答できないこともございますので、<br>
あらかじめご了承くださいませ。今後とも、何卒よろしくお願い申し上げます。</p>

</section>



<footer>
<p class="copyright">Copyright(C)2015 <a href="index.html">サイト収集.com</a>,Inc. All Rights Reserved.</p>
<p><a href="./">【 TOPページ 】</a><a href="http://ebacorp.jp/kaisyagaiyou.html" target="_blank">【 運営会社 】</a><a href="http://ebacorp.jp/privacy.html" target="_blank">【 プライバシーポリシー 】</a></p>
</footer>
</body>
</html>
