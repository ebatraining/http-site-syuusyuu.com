<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="お問い合わせページ,お問い合わせ">
<meta name="description" content="サイト収集.comのお問い合わせページです。ご掲載などに関してご不明点等がございましたら、当ページよりご連絡いただけますと幸いでございます。">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>お問い合わせページ</title>
<link href="css/base.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/form.css">
<script type="text/javascript" src="js/like-button.js"></script>
<!--<script type="text/javascript" src="js/slow_hover.js"></script>-->
<!-- ドロワーメニュー用スクリプトここから -->
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css">
<!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script>
  $(document).ready(function() {
    $('.drawer').drawer();
  });
</script>

<script type="text/javascript">
    function check(frm){
        var hissu=Array("syamei","tantou","todouhuken","siku","e-mail","tel","site","otoiawase");
        var hissu_nm = Array("会社名","担当者名","都道府県","市区郡町村","メールアドレス","電話番号","貴社サイト","お問い合わせ内容");
        var len=hissu.length;
        for(i=0; i<len; i++){
            var obj=frm.elements[hissu[i]];
            if(obj.type=="text" || obj.type=="textarea" || obj.type=="tel" || obj.type=="email" || obj.type=="url"){
                if(obj.value==""){
                    alert(hissu_nm[i]+"は必須入力項目です");
                    frm.elements[hissu[i]].focus();
                    return false;
                }
            }else{
              var flag = 0;
			  if(document.form.todouhuken.options[document.form.todouhuken.selectedIndex].value == ""){
				flag = 1;

                }
				if(flag){
					alert(hissu_nm[i]+"は必須入力項目です");
					 frm.elements[hissu[i]].focus();
                    return false;
				}

            }
        }
        return true;
    }
</script>
</head>
<link href="font-awesome.min.css" rel="stylesheet">

<body>

<header>
  <h2 id="sp-title"><a href="index.php">サイト収集.com</a></h2>
  <!--スマホ用ドロワーメニューここから-->
  <div id="sp-menu" class="drawer drawer--left">
    <div role="banner">
      <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button>
      <nav class="drawer-nav" role="navigation">
        <article class="left1 dis">
          <h1>カテゴリー一覧</h1>
          <h2>ホームページ・WEBデザイン</h2>
          <ul class="drawer-menu">
            <li><a class="fa fa-desktop fa-2x" aria-hidden="true" href="index.php"> オンラインサービス</a></li>
            <li><a class="fa fa-pencil fa-2x" aria-hidden="true" href="design-camp.php"> デザイン・デザイン会社</a></li>
            <li><a class="fa fa-home fa-2x" aria-hidden="true" href="building.php"> 建築・不動産</a></li>
            <li><a class="fa fa-diamond fa-2x" aria-hidden="true" href="fashion.php"> ファッション</a></li>
            <li><a class="fa fa-smile-o fa-2x" aria-hidden="true" href="beauty.php"> ビューティー</a></li>
            <li><a class="fa fa-car fa-2x" aria-hidden="true" href="life.php"> 生活・旅行・交通・ホテル</a></li>
            <li><a class="fa fa-heartbeat fa-2x" aria-hidden="true" href="medical.php"> 医療</a></li>
            <li><a class="fa fa-cutlery fa-2x" aria-hidden="true" href="food.php"> 飲食関連・食品</a></li>
            <li><a class="fa fa-commenting fa-2x" aria-hidden="true" href="blog.php"> ポータル・ブログ</a></li>
            <li><a class="fa fa-music fa-2x" aria-hidden="true" href="game.php"> ゲーム・音楽</a></li>
            <li><a class="fa fa-building fa-2x" aria-hidden="true" href="corporete.php"> 企業・法人・コーポレートサイト</a></li>
            <li><a class="fa fa-envelope fa-2x" aria-hidden="true" href="otoiawase.php"> お問い合わせ</a></li>
          </ul>
          <div class="like">
            <p class="like2"><img src="imges/like-bottom.gif" alt="お気に入り"></p>
            <input type="button" rel="sidebar" value="お気に入りに登録" onClick="toFavorite(location.href,document.title);">
          </div>
        </article>
      </nav>
    </div>
  </div>
  <!--ここまで-->
</header>
<div class="left-side">
<h1 id="pc-title"><a href="index.php">サイト収集.com</a></h1>
<article class="left1 dis">
<div id="pc-menu">
<h1>【カテゴリー一覧】</h1>
<h2>ホームページ・WEBデザイン</h2>
<ul>
  <li><a class="fa fa-desktop fa-2x" aria-hidden="true" href="index.php"> オンラインサービス</a></li>
  <li><a class="fa fa-pencil fa-2x" aria-hidden="true" href="design-camp.php"> デザイン・デザイン会社</a></li>
  <li><a class="fa fa-home fa-2x" aria-hidden="true" href="building.php"> 建築・不動産</a></li>
  <li><a class="fa fa-diamond fa-2x" aria-hidden="true" href="fashion.php"> ファッション</a></li>
  <li><a class="fa fa-smile-o fa-2x" aria-hidden="true" href="beauty.php"> ビューティー</a></li>
  <li><a class="fa fa-car fa-2x" aria-hidden="true" href="life.php"> 生活・旅行・交通・ホテル</a></li>
  <li><a class="fa fa-heartbeat fa-2x" aria-hidden="true" href="medical.php"> 医療</a></li>
  <li><a class="fa fa-cutlery fa-2x" aria-hidden="true" href="food.php"> 飲食関連・食品</a></li>
  <li><a class="fa fa-commenting fa-2x" aria-hidden="true" href="blog.php"> ポータル・ブログ</a></li>
  <li><a class="fa fa-music fa-2x" aria-hidden="true" href="game.php"> ゲーム・音楽</a></li>
  <li><a class="fa fa-building fa-2x" aria-hidden="true" href="corporete.php"> 企業・法人・コーポレートサイト</a></li>
  <li><a class="fa fa-envelope fa-2x" aria-hidden="true" href="otoiawase.php"><span class="active"> お問い合わせ</span></a></li>
</ul>
<div class="like">
<p class="like2"><img src="imges/like-bottom.gif" alt="お気に入り"></p>
<input type="button" rel='sidebar' value="お気に入りに登録" onClick="toFavorite(location.href,document.title);">
</div><!--like終わり-->

<!--ブログ埋め込み始め-->
<div class="news">
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/news.php'); ?>
</div>

</article>
</div><!--pc-menu終わり(問い合わせ画面はここまでスマホ非表示)-->
</div><!--left-side終わり-->


<section>
<h1>&emsp;お問い合わせページ</h1>

<!--★★★★★★ここから、問い合わせフォームを作成★★★★★★-->

<div id="form">
	<form action="thankyou.php" method="post" onSubmit="return check(this)" name="form">
	<fieldset>
		<table>
			<tr>
					<th>&nbsp;</th>
					<td><span class="red">*</span>は必須です。</td>
			</tr>
			<tr>
					<th><label for="syamei">会社名<span class="red">*</span></label></th>
					<td><input type="text" id="syamei" name="syamei" placeholder="会社名を入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="tantou">担当者名<span class="red">*</span></label></th>
					<td><input type="text" id="tantou" name="tantou" placeholder="担当者名を入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="todouhuken">都道府県<span class="red">*</span></label></th>
					<td>
						<select id="todouhuken" name="todouhuken">
							<option value="" selected>--選択--</option>
							<option value="北海道">北海道</option>
							<option value="青森県">青森県</option>
							<option value="岩手県">岩手県</option>
							<option value="宮城県">宮城県</option>
							<option value="秋田県">秋田県</option>
							<option value="山形県">山形県</option>
							<option value="福島県">福島県</option>
							<option value="茨城県">茨城県</option>
							<option value="栃木県">栃木県</option>
							<option value="群馬県">群馬県</option>
							<option value="埼玉県">埼玉県</option>
							<option value="千葉県">千葉県</option>
							<option value="東京都">東京都</option>
							<option value="神奈川県">神奈川県</option>
							<option value="新潟県">新潟県</option>
							<option value="富山県">富山県</option>
							<option value="石川県">石川県</option>
							<option value="福井県">福井県</option>
							<option value="山梨県">山梨県</option>
							<option value="長野県">長野県</option>
							<option value="岐阜県">岐阜県</option>
							<option value="静岡県">静岡県</option>
							<option value="愛知県">愛知県</option>
							<option value="三重県">三重県</option>
							<option value="滋賀県">滋賀県</option>
							<option value="京都府">京都府</option>
							<option value="大阪府">大阪府</option>
							<option value="兵庫県">兵庫県</option>
							<option value="奈良県">奈良県</option>
							<option value="和歌山県">和歌山県</option>
							<option value="鳥取県">鳥取県</option>
							<option value="島根県">島根県</option>
							<option value="岡山県">岡山県</option>
							<option value="広島県">広島県</option>
							<option value="山口県">山口県</option>
							<option value="徳島県">徳島県</option>
							<option value="香川県">香川県</option>
							<option value="愛媛県">愛媛県</option>
							<option value="高知県">高知県</option>
							<option value="福岡県">福岡県</option>
							<option value="佐賀県">佐賀県</option>
							<option value="長崎県">長崎県</option>
							<option value="熊本県">熊本県</option>
							<option value="大分県">大分県</option>
							<option value="宮崎県">宮崎県</option>
							<option value="鹿児島県">鹿児島県</option>
							<option value="沖縄県">沖縄県</option>
						</select>
					</td>
			</tr>
			<tr>
					<th><label for="siku">市区郡町村<span class="red">*</span></label></th>
					<td><input type="text" id="siku" name="siku" placeholder="市区郡町村を入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="e-mail">メールアドレス<span class="red">*</span></label></th>
					<td><input type="email" id="e-mail" name="e-mail" placeholder="メールアドレスを入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="tel">電話番号<span class="red">*</span></label></th>
					<td><input type="tel" id="tel" name="tel" placeholder="電話番号を入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="site">貴社サイト<span class="red">*</span></label></th>
					<td><input type="url" id="site" name="site" placeholder="URLを入力してください" class="text"></td>
			</tr>
			<tr>
					<th><label for="otoiawase">お問い合わせ内容<span class="red">*</span></label></th>
					<td><textarea id="otoiawase" name="otoiawase" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
					<th>&nbsp;</th>
					<td><input type="submit" value="送信する"></td>
			</tr>
		</table>
	</fieldset>
	</form>
</div>









<!--★★★★★★問い合わせフォーム 完成★★★★★★-->


</section>



<footer>
<p class="copyright">Copyright(C)2015 <a href="index.html">サイト収集.com</a>,Inc. All Rights Reserved.</p>
<p><a href="./">【 TOPページ 】</a><a href="http://ebacorp.jp/kaisyagaiyou.html" target="_blank">【 運営会社 】</a><a href="http://ebacorp.jp/privacy.html" target="_blank">【 プライバシーポリシー 】</a></p>
</footer>
</body>
</html>
