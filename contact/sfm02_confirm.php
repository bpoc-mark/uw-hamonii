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
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>お問い合わせ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main id="Contact" class="sfm2">
      <section class="p-header">
				<div class="p-header--wrap">
					<p class="p-header--sm">entry</p>
					<h1 class="p-header--lg">仕事体験申込フォーム</h1>
				</div>
			</section>
      <section class="form-sec">
        <div class="form_wrap container">
          <p>
						求人掲載企業へのエントリーは、下記の応募フォームよりお願い致します。<br>
						必須項目「<span>*</span>」をご記入の上、「入力内容の確認」ボタンをクリックしてください。<br>
						なお、応募内容の確認に少々お時間をいただく場合がございます。ご了承ください。<br>
						個人情報の取扱いについてはプライバシーポリシーをご確認ください。
					</p>
					<h2>
						<span>エントリー企業</span>
						[ エスビー鉄鋼株式会社 ]
					</h2>
          <form method="post" name="sfm-form" id="sfm-form" action="./">

            <table>
							<tr>
								<th>お名前<span class="need">*</span></th>
								<td><?php echo $sfm_html->name; ?></td>
							</tr>

							<tr>
								<th>ふりがな<span class="need">*</span></th>
								<td><?php echo $sfm_html->furigana; ?></td>
							</tr>

							<tr class="row-radio">
								<th>性別 <span class="need">*</span></th>
								<td><?php echo $sfm_html->gender; ?></td>
							</tr>

							<tr>
								<th>生年月日<span class="need">*</span></th>
								<td><?php echo $sfm_html->bday; ?></td>
							</tr>

							<tr class="address">
								<th>住所</th>
								<td><?php echo $sfm_html->zip; ?><br><?php echo $sfm_html->address; ?></td>
							</tr>

							<tr>
								<th>電話番号<span class="need">*</span></th>
								<td><?php echo $sfm_html->tel; ?></td>
							</tr>

							<tr>
								<th>メールアドレス<span class="need">*</span></th>
								<td><?php echo $sfm_html->email; ?></td>
							</tr>

							<tr class="row-radio">
								<th>職業<span class="need">*</span></th>
								<td><?php echo $sfm_html->profession; ?></td>
							</tr>

							<tr>
								<th>学校・会社名</th>
								<td><?php echo $sfm_html->companyname; ?></td>
							</tr>

							<tr>
								<th>希望職種</th>
								<td><?php echo $sfm_html->occupation; ?></td>
							</tr>


						</table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
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
