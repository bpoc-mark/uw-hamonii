<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>求人情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Recruit">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header">
        <div class="p-header--wrap">
          <p class="p-header--sm">recruit</p>
          <h1 class="p-header--lg">求人情報</h1>
        </div>
      </section>
      <section class="sect-1">
        <div class="container">
          <div class="content">
            <form action="" class="search-panel">
              <h2 class="search-ttl">求人・企業を探す</h2>
              <div class="row">
                <div class="col">
                  	<label for="" class="pc"><img src="/images/top/sect-2/building-icon.svg" class="building-icon" alt="">業種から探す</label>
					<div class="select-box select_s--icon1">
						<select name="select_s" required value="" title="">
							<option name="select_s[]" value="" disabled="disabled" selected hidden>すべての業種</option>
							<option name=" select_s[]" value="セレクト1">セレクト1</option>
							<option name="select_s[]" value="セレクト2">セレクト2</option>
							<option name="select_s[]" value="セレクト3">セレクト3</option>
						</select>
					</div>
                </div>
                <div class="col">
                  	<label for="" class="pc"><img src="/images/top/sect-2/tie-icon.svg" class="tie-icon" alt="">職種から探す</label>
					<div class="select-box select_s--icon2">
						<select name="select_s" required value="" title="">
							<option name="select_s[]" value="" disabled="disabled" selected hidden>すべての職種</option>
							<option name=" select_s[]" value="セレクト1">セレクト1</option>
							<option name="select_s[]" value="セレクト2">セレクト2</option>
							<option name="select_s[]" value="セレクト3">セレクト3</option>
						</select>
					</div>
                </div>
                <div class="col">
                  	<label for="" class="pc"><img src="/images/top/sect-2/map-icon.svg" class="map-icon" alt="">勤務地から探す</label>
					<div class="select-box select_s--icon3">
						<select name="select_s" required value="" title="">
							<option name="select_s[]" value="" disabled="disabled" selected hidden>すべての勤務地</option>
							<option name=" select_s[]" value="セレクト1">セレクト1</option>
							<option name="select_s[]" value="セレクト2">セレクト2</option>
							<option name="select_s[]" value="セレクト3">セレクト3</option>
						</select>
					</div>
                </div>
                <div class="col">
                  	<label for="" class="pc"><img src="/images/top/sect-2/text-icon.svg" class="text-icon" alt="">キーワードから探す</label>
					<div class="input-wrap">
						<svg class="tie-icon sp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.1 13.69"><defs><style>.cls-1{fill:#313131;fill-rule:evenodd;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M4.79,11.34c0,.72-.29,1.37-.32,2.35-1.12-.78-1.23-.69-1.23-.49s.16.3.43.3c.43,0,1.8-.18,2.38-.18s1.93.18,2.36.18c.27,0,.43-.12.43-.3s.32-.29-.52.49a3.84,3.84,0,0,1-1-2.35V1.64c0-.69.29-.76.85-.76A3.92,3.92,0,0,1,11.29,3.2c.14.29.23.51.5.51a.33.33,0,0,0,.31-.36A27,27,0,0,1,11.65.52c0-.48-.2-.37-.65-.37S7.53,0,6.05,0,1.53.15,1.1.15.45,0,.45.52A27,27,0,0,1,0,3.35a.32.32,0,0,0,.31.36c.27,0,.36-.22.5-.51A3.91,3.91,0,0,1,3.94.88c.56,0,.85.07.85.76Z"/></g></g></svg>
						<input type="text" name="" value="" title="" placeholder="キーワード">
					</div>
                </div>
              </div>
              <input type="submit" class="btn-search" value="検索する">
            </form>
            <form action="" class="search-group">
              <div class="row">
                <div class="col">
                  <input type="submit" class="btn-search" value="検索条件">
                </div>
                <div class="col">
                  <input type="text" class="" value="" placeholder="新卒、ものづくり（製造）、静岡県西部地域、&#10;製造、営業（ルート営業）">
                </div>
                <div class="col">
                  <p>検索結果  <span>20</span>件</p>
                </div>
              </div>
            </form>
            <div class="job-list">
				<div class="row">
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-1.jpg" alt="エスビー鉄鋼株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">エスビー鉄鋼株式会社</h3>
							<p class="job-link--desc">エスビー鉄鋼では「最後まで働きたい会社作り」を究極の目標に掲げ、社員の喜びと業績安定に取り組み、地域貢献を目指しています。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-2.jpg" alt="遠州紙工業株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">雰囲気</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon-wh.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ / 営業スタッフ ]</h5>
							<h3 class="job-link--title">遠州紙工業株式会社</h3>
							<p class="job-link--desc">浜松で創業75年、紙器製品、段ボール製品等をメインに取り扱う総合包装メーカーです</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-3.jpg" alt="株式会社浅沼技研">
								</figure>
								<div class="job-link--status job-link--status--bg2"><span>新卒</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">やりがい</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">株式会社浅沼技研</h3>
							<p class="job-link--desc">〜「世界に通用するものづくり」へ〜<br>私たちは「試作品製造のトータルメーカー」として革新的鋳造技術・熟練した加工技術を用い、認証された確かな測定技術でクォリティの高い製品をご提供いたします。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-4.jpg" alt="第一伊藤建設株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 施設管理・設計、営業スタッフ ]</h5>
							<h3 class="job-link--title">第一伊藤建設株式会社</h3>
							<p class="job-link--desc">どこまでも誠実にお客様と向き合う。信頼から生まれる【良縁づくり】。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-1.jpg" alt="エスビー鉄鋼株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">エスビー鉄鋼株式会社</h3>
							<p class="job-link--desc">エスビー鉄鋼では「最後まで働きたい会社作り」を究極の目標に掲げ、社員の喜びと業績安定に取り組み、地域貢献を目指しています。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-2.jpg" alt="遠州紙工業株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">雰囲気</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon-wh.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ / 営業スタッフ ]</h5>
							<h3 class="job-link--title">遠州紙工業株式会社</h3>
							<p class="job-link--desc">浜松で創業75年、紙器製品、段ボール製品等をメインに取り扱う総合包装メーカーです</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-3.jpg" alt="株式会社浅沼技研">
								</figure>
								<div class="job-link--status job-link--status--bg2"><span>新卒</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">やりがい</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">株式会社浅沼技研</h3>
							<p class="job-link--desc">〜「世界に通用するものづくり」へ〜<br>私たちは「試作品製造のトータルメーカー」として革新的鋳造技術・熟練した加工技術を用い、認証された確かな測定技術でクォリティの高い製品をご提供いたします。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-4.jpg" alt="第一伊藤建設株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 施設管理・設計、営業スタッフ ]</h5>
							<h3 class="job-link--title">第一伊藤建設株式会社</h3>
							<p class="job-link--desc">どこまでも誠実にお客様と向き合う。信頼から生まれる【良縁づくり】。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-1.jpg" alt="エスビー鉄鋼株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">エスビー鉄鋼株式会社</h3>
							<p class="job-link--desc">エスビー鉄鋼では「最後まで働きたい会社作り」を究極の目標に掲げ、社員の喜びと業績安定に取り組み、地域貢献を目指しています。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-2.jpg" alt="遠州紙工業株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">雰囲気</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon-wh.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ / 営業スタッフ ]</h5>
							<h3 class="job-link--title">遠州紙工業株式会社</h3>
							<p class="job-link--desc">浜松で創業75年、紙器製品、段ボール製品等をメインに取り扱う総合包装メーカーです</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-3.jpg" alt="株式会社浅沼技研">
								</figure>
								<div class="job-link--status job-link--status--bg2"><span>新卒</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">やりがい</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 工場、製造スタッフ ]</h5>
							<h3 class="job-link--title">株式会社浅沼技研</h3>
							<p class="job-link--desc">〜「世界に通用するものづくり」へ〜<br>私たちは「試作品製造のトータルメーカー」として革新的鋳造技術・熟練した加工技術を用い、認証された確かな測定技術でクォリティの高い製品をご提供いたします。</p>
						</a>
					</div>
					<div class="col">
						<a href="" class="job-link">
							<div class="job-link--img-wrap">
								<figure class="job-link--img">
									<img src="/images/recruit/img-4.jpg" alt="第一伊藤建設株式会社">
								</figure>
								<div class="job-link--status job-link--status--bg1"><span>新卒<br>中途</span></div>
							</div>
							<div class="job-link--ratings">
								<span class="job-link--ratings__txt">自己成長度</span>
								<div class="job-link--ratings__wrap">
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
									<span class="job-link--ratings__star"><img src="/images/common/star-icon.svg" alt=""></span>
								</div>
							</div>
							<h5 class="job-link--sub-head sp">[ 施設管理・設計、営業スタッフ ]</h5>
							<h3 class="job-link--title">第一伊藤建設株式会社</h3>
							<p class="job-link--desc">どこまでも誠実にお客様と向き合う。信頼から生まれる【良縁づくり】。</p>
						</a>
					</div>
				</div>
			</div>

              <!-- Wordpress -->
              <div class="page_navigation recruit-page">
                <div class="wp-pagenavi">
                  <a class="previouspostslink" href="#" rel="prev"><img src="/images/common/pager_arrow.svg" alt=""></a>
                  <a class="page smaller" href="#">1</a>
                  <span class="current">2</span>
                  <a class="page larger" href="#">3</a>
                  <a class="nextpostslink" href="#" rel="next"><img src="/images/common/pager_arrow.svg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
