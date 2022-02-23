<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>
<div class="overlay"></div>
<div class="header_inner">

	<div class="logo-wrap">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header-logo.svg" alt="'. SITE_NAME .'"></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header-logo.svg" alt="'. SITE_NAME .'"></a></p>';
		}
		?>
	</div>
	
	<nav class="nav">
		<ul class="nav--list">
			<li class="nav--item sp"><a href="/" class="nav--link <?php if ($str[1] == "") {
												echo 'nav--link--active';
											} ?>">HOME</a></li>
			<li class="nav--item"><a href="/recruit/" class="nav--link <?php if ($str[1] == "recruit") {
												echo 'nav--link--active';
											}elseif($str[1] == "company"){echo 'nav--link--active2';} ?>">求人情報</a></li>
			<li class="nav--item"><a href="/" class="nav--link <?php if ($str[1] == "") {
												echo 'nav--link--active';
											} ?>">就活応援コラム</a>
				<ul class="sub-menu sp">
					<li class="sub-menu--item">
						<a href="" class="sub-menu--link">面接のコツ</a>
					</li>
					<li class="sub-menu--item">
						<a href="" class="sub-menu--link">履歴書の書き方</a>
					</li>
				</ul>								
			</li>
			<li class="nav--item"><a href="/news/" class="nav--link <?php if ($str[1] == "news" || $str[1] == "news-single") {
												echo 'nav--link--active';
											} ?>">採育ニュース</a></li>
			<li class="nav--item"><a href="/" class="nav--link <?php if ($str[1] == "") {
												echo 'nav--link--active';
											} ?>">企業の皆さまへ</a></li>
			<li class="nav--item sp"><a href="/" class="nav--link <?php if ($str[1] == "") {
												echo 'nav--link--active';
											} ?>">かえるシステム</a></li>
			<li class="nav--item"><a href="/contact/" class="nav--link nav--link__contact <?php if ($str[1] == "") {
												echo 'here';
											} ?>">
											<svg class="nav--link--email-icon pc" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.35 44.92"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="デザイン"><path class="cls-1" d="M64.44,44.92H2A1.91,1.91,0,0,1,.12,43V2a1.9,1.9,0,0,1,3.8,0V41.11H62.54V2a1.91,1.91,0,0,1,3.81,0V43A1.91,1.91,0,0,1,64.44,44.92Z"/><path class="cls-1" d="M33.05,27.87a9,9,0,0,1-5.75-2.08L.72,3.57A2,2,0,0,1,2,0H64.08a2,2,0,0,1,1.3,3.57L38.8,25.79A8.94,8.94,0,0,1,33.05,27.87ZM7.58,4,29.89,22.69a4.92,4.92,0,0,0,6.32,0L58.52,4Z"/></g></g></svg>
											お問い合わせ</a></li>
		</ul>
	</nav>

	<nav class="nav2 sp">
		<ul class="nav2--list">
			<li class="nav2--item">
				<a href="" class="nav2--link"><svg class="nav2--link--email-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.35 44.92"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="デザイン"><path class="cls-1" d="M64.44,44.92H2A1.91,1.91,0,0,1,.12,43V2a1.9,1.9,0,0,1,3.8,0V41.11H62.54V2a1.91,1.91,0,0,1,3.81,0V43A1.91,1.91,0,0,1,64.44,44.92Z"/><path class="cls-1" d="M33.05,27.87a9,9,0,0,1-5.75-2.08L.72,3.57A2,2,0,0,1,2,0H64.08a2,2,0,0,1,1.3,3.57L38.8,25.79A8.94,8.94,0,0,1,33.05,27.87ZM7.58,4,29.89,22.69a4.92,4.92,0,0,0,6.32,0L58.52,4Z"/></g></g></svg></a>
			</li>
			<li class="nav2--item">
				<div class="menu sp" id="nav_menu">
					<span class="line line-t"></span>
					<span class="line line-m"></span>
					<span class="line line-b"></span>
					<p></p>
				</div>
			</li>
		</ul>
	</nav>

</div>
