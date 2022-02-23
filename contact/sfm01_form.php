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

		<main id="Contact" class="sfm1">
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
								<td><input type="text" name="name_s" value="" title="" placeholder="田中 太郎"></td>
							</tr>

							<tr>
								<th>ふりがな<span class="need">*</span></th>
								<td><input type="text" name="furigana_s" value="" title="" placeholder="たなか たろう"></td>
							</tr>

							<tr class="row-radio">
								<th>性別 <span class="need">*</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="gender_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="radio" name="gender_s[]" value="男性" id="radio01" />&nbsp;
												<label for="radio01">男性</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="gender_s[]" value="女性" id="radio02" />&nbsp;
												<label for="radio02">女性</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>生年月日<span class="need">*</span></th>
								<td><input type="text" name="bday_s" value="" title="" placeholder="2000/01/01"></td>
							</tr>

							<tr class="address">
								<th>住所</th>
								<td>
									<span class="zip-wrap">
										<input class="zip" type="text" name="zip" size="10" maxlength="8" placeholder="430-0846">
									</span>
									<input class="ad_btn" type="button" value="住所自動入力"><br>
									<input class="text02" type="text" name="address" size="60" placeholder="静岡県浜松市南区白羽町689">
								</td>
							</tr>

							<tr>
								<th>電話番号<span class="need">*</span></th>
								<td><input type="text" name="tel_s" value="" title="" placeholder="090-1234-5678"></td>
							</tr>

							<tr>
								<th>メールアドレス<span class="need">*</span></th>
								<td><input type="text" name="email_s" value="" title="" placeholder="example@haamonii.com"></td>
							</tr>

							<tr class="row-radio">
								<th>職業<span class="need">*</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="profession_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="radio" name="profession_s[]" value="高校生" id="radio03" />&nbsp;
												<label for="radio03">高校生</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="profession_s[]" value="大学・大学院生" id="radio04" />&nbsp;
												<label for="radio04">大学・大学院生</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="profession_s[]" value="専門学生" id="radio05" />&nbsp;
												<label for="radio05">専門学生</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="profession_s[]" value="会社員" id="radio06" />&nbsp;
												<label for="radio06">会社員</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="profession_s[]" value="その他" id="radio07" />&nbsp;
												<label for="radio07">その他</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>学校・会社名</th>
								<td><input type="text" name="companyname" value="" title="" placeholder="採育株式会社"></td>
							</tr>

							<tr>
								<th>希望職種</th>
								<td><input type="text" name="occupation" value="" title="" placeholder="営業職"></td>
							</tr>


						</table>

						<div class="overscroll">
							<h3>プライバシーポリシー</h3>
							<ul>
								<li>
									<p>＿＿＿＿＿＿＿＿（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p>
								</li>
								<li>
									<p>第1条（個人情報）<br>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。
									</p>
								</li>
								<li>
									<p>第2条（個人情報の収集方法）<br>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>
								</li>
							</ul>
						</div>

						<div class="agree_area">
							<input type="checkbox" name="agree" id="checkAgree">
							<label for="checkAgree" class="checkAgree">プライバシーポリシーの適用に<br class="sp">同意します</label>
						</div>

						<div class="submit_area">
							<span>
								<input id="checkSubmit" type="submit" value="入力内容を確認" class="pushbtn" />
							</span>
						</div><!-- submit_area -->


						<input type="hidden" name="mailToNum" value="0" />
						<input type="hidden" name="mode" value="CONFIRM" />
					</form>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
				tel: function(value, element) {
					return this.optional(element) || /^[0-9]+[0-9.-]+$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				furigana_s: {
					required: true
				},
				'gender_s[]': {
					required: true,
				},
				bday_s: {
					required: true
				},
				tel_s: {
					tel: true,
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				'profession_s[]': {
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				check_s: {
					required: "チェックボックスを選択してください"
				},
				tel_s: {
					tel: "正しい電話番号を入力してください"
				}
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent().parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip', '', 'address', 'address');
			});
		});
	</script>
</body>

</html>
