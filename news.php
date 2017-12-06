<!doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
	<div class="news">
		<h2>新着ニュース</h2>
		<?php
		$rss = simplexml_load_file('http://syoukai-blog.com/feed/');
		echo '<ul>';
		foreach($rss->channel->item as $item){
			$title = $item->title;
			$date = date("Y年 n月 j日", strtotime($item->pubDate));
			$link = $item->link;
			$description = mb_strimwidth (strip_tags($item->description), 0 , 110, "…Read More", "utf-8");
		?>
		<li><a href="<?php echo $link; ?>" target="_blank">
		<span class="date"><?php echo $date; ?></span>
		<span class="title"><?php echo $title; ?></span>
		<span class="text"><?php echo $description; ?></span>
		</a></li>
		<?php }  echo '</ul>'; ?>
	</div>
<body>
</body>
</html>