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
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>ニュース | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/header_tag.php"); ?>
</head>

<body id="News-Single">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header">
        <div class="p-header--wrap">
          <p class="p-header--sm">news</p>
          <h1 class="p-header--lg">採育ニュース</h1>
        </div>
      </section>
      <section class="news">
        <div class="container">
          <div class="content">
            <span class="date">2021.02.26 <span class="job-info">[ 求人情報 ]</span></span>
            <h2 class="title">就活オンライン商談会実施しました</h2>
            <p>
              ダミーテキストです。<br>
              吾輩は猫である。名前はまだ無い。どこで生れたかとんと見当がつかぬ。<br>
              何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪な種族であったそうだ。この書生というのは時々我々を捕えて煮て食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。<br>
              <br>
              ただ彼の掌に載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。<br>
              掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始であろう。<br>
              この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶だ。<br>
              その後猫にもだいぶ逢ったがこんな片輪には一度も出会わした事がない。のみならず顔の真中があまりに突起している。<br>
              そうしてその穴の中から時々ぷうぷうと煙を
            </p>
            <figure>
              <img src="/saiiku/images/news-single/img-1.jpg" alt="就活オンライン商談会実施しました">
            </figure>
          </div>
          <ul class="nav">
            <li class="btnPrev">
              <a href=""><img src="/saiiku/images/common/pager_arrow.svg" alt=""></a>
            </li>
            <li class="toList">
              <a href="">一覧に戻る</a>
            </li>
            <li class="btnNext">
              <a href=""><img src="/saiiku/images/common/pager_arrow.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/saiiku/inc/tag/footer_tag.php"); ?>
</body>

</html>
