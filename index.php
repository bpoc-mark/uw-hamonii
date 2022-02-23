<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/tag_manager.php"); ?>
	<meta charset="UTF-8" />
	<meta name="robots" content="index,follow">
	<link rel="canonical" href="<?php echo CANONICAL ?>">
	<meta name="keywords" content="<?php echo KEY_WORD ?>">
	<meta name="description" content="<?php echo DESCRIPTION ?>">
	<meta property="og:title" content="<?php echo SITE_NAME ?>">
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header class="head-top">
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<!-- Slider main container -->
					<div class="swiper top_swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide slide-img-1">
								<picture >
									<source srcset="/saiiku/images/top/sect-1/sp/img_1.jpg" media="(max-width: 899px)">
									<img src="/saiiku/images/top/sect-1/img_1.jpg" alt="働きがいが見つかる採育ちゃんねる">
								</picture>
							</div>
							<div class="swiper-slide slide-img-2">
								<picture >
									<source srcset="/saiiku/images/top/sect-1/sp/img_1.jpg" media="(max-width: 899px)">
									<img src="/saiiku/images/top/sect-1/img_1.jpg" alt="働きがいが見つかる採育ちゃんねる">
								</picture>
							</div>
							<div class="swiper-slide slide-img-3">
								<picture >
									<source srcset="/saiiku/images/top/sect-1/sp/img_1.jpg" media="(max-width: 899px)">
									<img src="/saiiku/images/top/sect-1/img_1.jpg" alt="働きがいが見つかる採育ちゃんねる">
								</picture>
							</div>
							<div class="swiper-slide slide-img-4">
								<picture >
									<source srcset="/saiiku/images/top/sect-1/sp/img_1.jpg" media="(max-width: 899px)">
									<img src="/saiiku/images/top/sect-1/img_1.jpg" alt="働きがいが見つかる採育ちゃんねる">
								</picture>
							</div>
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<div class="form-wrap">
							<h3 class="ttl">求人・企業を探す</h3>
							<div class="row">
								<div class="col">
									<div class="select-box select_s--icon1">
										<select name="select1" required value="" title="">
											<option name="select1[]" value="" disabled="disabled" selected hidden>すべての業種</option>
											<option name=" select1[]" value="営業（ルート営業）">営業（ルート営業）</option>
											<option name="select1[]" value="営業（新規開拓）">営業（新規開拓）</option>
											<option name="select1[]" value="営業（来店来社）">営業（来店来社）</option>
											<option name="select1[]" value="販売">販売</option>
											<option name=" select1[]" value="接客・サービス">接客・サービス</option>
											<option name="select1[]" value="事務">事務</option>
											<option name="select1[]" value="製造">製造</option>
											<option name=" select1[]" value="軽作業・物流">軽作業・物流</option>
											<option name="select1[]" value="施工管理">施工管理</option>
											<option name="select1[]" value="技術">技術</option>
											<option name=" select1[]" value="設計">設計</option>
											<option name="select1[]" value="SE・プログラマー">SE・プログラマー</option>
											<option name="select1[]" value="WEBデザイナー">WEBデザイナー</option>
											<option name=" select1[]" value="看護・人的ケア">看護・人的ケア</option>
											<option name="select1[]" value="総合職">総合職</option>
											<option name="select1[]" value="その他">その他</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="select-box select_s--icon2">
										<select name="select2" required value="" title="">
											<option name="select2[]" value="" disabled="disabled" selected hidden>すべての職種</option>
											<option name="select2[]" value="ものづくり（製造）">ものづくり（製造）</option>
											<option name="select2[]" value="建設/ハウスメーカー">建設/ハウスメーカー</option>
											<option name="select2[]" value="不動産・インテリア">不動産・インテリア</option>
											<option name="select2[]" value="物流・輸送">物流・輸送</option>
											<option name="select2[]" value="販売">販売</option>
											<option name="select2[]" value="医療・福祉・リハビリ">医療・福祉・リハビリ</option>
											<option name="select2[]" value="IT・WEB">IT・WEB</option>
											<option name="select2[]" value="電気・設備・保安">電気・設備・保安</option>
											<option name="select2[]" value="観光・宿泊・飲食サービス">観光・宿泊・飲食サービス</option>
											<option name="select2[]" value="広告デザイン・サービス">広告デザイン・サービス</option>
											<option name="select2[]" value="士業（税理・労務・司法・弁護）">士業（税理・労務・司法・弁護）</option>
											<option name="select2[]" value="金融・保険・証券">金融・保険・証券</option>
											<option name="select2[]" value="保育・教育">保育・教育</option>
											<option name="select2[]" value="公務員">公務員</option>
											<option name="select2[]" value="その他">その他</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="select-box select_s--icon3">
										<select name="select3" required value="" title="">
											<option name="select3[]" value="" disabled="disabled" selected hidden>すべての勤務地</option>
											<option name=" select3[]" value="静岡県西部地域">静岡県西部地域</option>
											<option name="select3[]" value="静岡県内愛知県内">静岡県内愛知県内</option>
											<option name="select3[]" value="近隣県まで（神奈川・山梨・岐阜県等）">近隣県まで（神奈川・山梨・岐阜県等）</option>
											<option name=" select3[]" value="全国可能">全国可能</option>
										</select>
									</div>
								</div>
								<div class="col">
									<input type="text" name="" value="" title="" placeholder="キーワード">
								</div>
								<div class="col">
									<a href="" class="btn-search">検 索</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="container">
						<div class="content row">
							<div class="col">
								<a href="">
									<figure>
										<img src="/saiiku/images/top/sect-3/img_1.svg" alt="">
									</figure>
									<h3>求人情報</h3>
									<div class="arrow-wrap">
										<img class="arrow-icon" src="/saiiku/images/top/sect-3/arrow-icon.svg" alt="">
									</div>
								</a>
							</div>
							<div class="col">
								<a href="">
									<figure>
										<img src="/saiiku/images/top/sect-3/img_2.svg" alt="">
									</figure>
									<h3>就活応援コラム</h3>
									<div class="arrow-wrap">
										<img class="arrow-icon" src="/saiiku/images/top/sect-3/arrow-icon.svg" alt="">
									</div>
								</a>
							</div>
							<div class="col">
								<a href="">
									<figure>
										<img src="/saiiku/images/top/sect-3/img_3.svg" alt="">
									</figure>
									<h3>採育ニュース</h3>
									<div class="arrow-wrap">
										<img class="arrow-icon" src="/saiiku/images/top/sect-3/arrow-icon.svg" alt="">
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="content">
							<h3 class="ttl">採育ニュース</h3>
							<div class="row">
								<div class="col">
									<a href="">
										<figure>
											<img src="/saiiku/images/top/sect-4/img_1.jpg" alt="">
										</figure>
										<div class="post-data">
											<span class="status">[ NEW ]</span>
											<h4 class="post-ttl">就活オンライン商談会<br>実施しました</h4>
											<p class="post-date">2021.02.26 <span class="info">[ 求人情報 ]</span></p>
										</div>
									</a>
								</div>
								<div class="col">
									<a href="">
										<figure>
											<img src="/saiiku/images/top/sect-4/img_2.jpg" alt="">
										</figure>
										<div class="post-data">
											<h4 class="post-ttl">2021年度就活アンケート<br>データ公開</h4>
											<p class="post-date">2021.02.26 <span class="info">[ 求人情報 ]</span></p>
										</div>
									</a>
								</div>
								<div class="col">
									<a href="">
										<figure>
											<img src="/saiiku/images/top/sect-4/img_3.jpg" alt="">
										</figure>
										<div class="post-data">
											<h4 class="post-ttl">就活生が企業に取材！</h4>
											<p class="post-date">2021.02.26 <span class="info">[ 求人情報 ]</span></p>
										</div>
									</a>
								</div>
							</div>
							<a href="" class="btn-news-list">ニュース 一覧</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_5">
				<div class="wrapper">
					<div class="container">
						<div class="content">
							<h3 class="ttl">今求人している企業</h3>
							<div class="row">
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-1.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">自己成長度</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">エスビー鉄鋼株式会社</h3>
										<p class="job-link--desc">エスビー鉄鋼では「最後まで働きたい会社作り」を究極の目標に掲げ、社員の喜びと業績安定に取り組み、地域貢献を目指しています。</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-2.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">雰囲気</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ / 営業スタッフ ]</h5>
										<h3 class="job-link--title">遠州紙工業株式会社</h3>
										<p class="job-link--desc">浜松で創業75年、紙器製品、段ボール製品等をメインに取り扱う総合包装メーカーです</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-1.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg2"><span>新卒</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">やりがい</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">株式会社浅沼技研</h3>
										<p class="job-link--desc">〜「世界に通用するものづくり」へ〜<br>私たちは「試作品製造のトータルメーカー」として革新的鋳造技術・熟練した加工技術を用い、認証された確かな測定技術でクォリティの高い製品をご提供いたします。</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-4.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">自己成長度</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 施設管理・設計、営業スタッフ ]</h5>
										<h3 class="job-link--title">第一伊藤建設株式会社</h3>
										<p class="job-link--desc">どこまでも誠実にお客様と向き合う。信頼から生まれる【良縁づくり】。</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-5.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">雰囲気</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">株式会社マルハナ</h3>
										<p class="job-link--desc">エスビー鉄鋼では「最後まで働きたい会社作り」を究極の目標に掲げ、社員の喜びと業績安定に取り組み、地域貢献を目指しています。</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-6.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">人間関係</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon-wh.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">小出製作所</h3>
										<p class="job-link--desc">浜松で創業75年、紙器製品、段ボール製品等をメインに取り扱う総合包装メーカーです</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-7.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg2"><span>新卒</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">人間関係</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">株式会社浅沼技研</h3>
										<p class="job-link--desc">〜「世界に通用するものづくり」へ〜<br>私たちは「試作品製造のトータルメーカー」として革新的鋳造技術・熟練した加工技術を用い、認証された確かな測定技術でクォリティの高い製品をご提供いたします。</p>
									</a>
								</div>
								<div class="col">
									<a href="" class="job-link">
										<div class="job-link--img-wrap">
											<figure class="job-link--img">
												<img src="/saiiku/images/top/sect-5/img-7.jpg" alt="">
											</figure>
											<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
										</div>
										<div class="job-link--ratings">
											<span class="job-link--ratings__txt">人間関係</span>
											<div class="job-link--ratings__wrap">
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
												<span class="job-link--ratings__star"><img src="/saiiku/images/common/star-icon.svg" alt=""></span>
											</div>
										</div>
										<h5 class="job-link--sub-head">[ 工場、製造スタッフ ]</h5>
										<h3 class="job-link--title">第一伊藤建設株式会社</h3>
										<p class="job-link--desc">どこまでも誠実にお客様と向き合う。信頼から生まれる【良縁づくり】。</p>
									</a>
								</div>
							</div>
							<a href="" class="btn-news-list">求人情報一覧</a>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer class="footer-top">
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/footer_tag.php"); ?>

	<script>
		const swiper1 = new Swiper('.top_swiper', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			autoplay: {
				delay: 3000,
			},
			speed: 3000,
			centeredSlides: true,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
			},

			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				0: {
					slidesPerView: 1.1,
					spaceBetween: 5,
				},
				// when window width is >= 480px
				900: {
					slidesPerView: 1.1,
					spaceBetween: 20,
				}
			}
		});
	</script>
</body>

</html>
