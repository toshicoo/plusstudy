<div class="plot">
	<div class="container_title">
		<div class="title">
			<img class="new_acc_header" src="<?php echo IMG_PATH . 'accountregist_h.png'; ?>" alt="アカウント登録">
		</div>
	</div>
	<div class="pankuzu cf">
		<ul class="pankuzu_ul">
			<li><img class="navi_1" src="<?php echo IMG_PATH . 'accountregiststep1.png'; ?>" alt="アドレス入力"></li>
			<li><img class="navi_2" src="<?php echo IMG_PATH . 'accountregiststep2.png'; ?>" alt="確認メール送信完了"></li>
			<li><img class="navi_3" src="<?php echo IMG_PATH . 'accountregiststep3.png'; ?>" alt="登録情報入力"></li>
			<li><img class="navi_4" src="<?php echo IMG_PATH . 'accountregiststep4_on.png'; ?>" alt="確認"></li>
			<li><img class="navi_5" src="<?php echo IMG_PATH . 'accountregiststep5.png'; ?>" alt="完了"></li>
		</ul>
	</div>

	<div class="container_body2">
		<dl class="confirm_dl cf">
			<dt>メールアドレス（非公開）</dt>
			<dd><?php echo $acc['mailaddress']; ?></dd>
			<dt id="confirmNameDt">氏名</dt>
			<dd><span class="nameRuby"><?php echo htmlspecialchars($acc['last_ruby']); ?> <?php echo htmlspecialchars($acc['first_ruby']); ?></span><span class="confirmName"><?php echo htmlspecialchars($acc['last_name']); ?> <?php echo htmlspecialchars($acc['first_name']); ?></span></dd>
			<dt>コース</dt>
			<dd><?php echo +$acc['course'] === 2 ? '2年制課程' : '4年制課程'; ?></dd>
			<dt>パスワード</dt>
			<dd><?php for ($i=0; $i<mb_strlen($acc['passwd']); $i++) { echo '*'; } ?></dd>
			<dt>学年</dt>
			<dd><?php echo $acc['grade']; ?> 年</dd>
			<dt>学科</dt>
			<dd><?php echo $acc['subject']; ?> 学科</dd>
			<dt>資格</dt>
			<dd><?php echo htmlspecialchars(($acc['licenses'] == "") ? "-" : $acc['licenses']); ?></dd>
			<dt>スキル</dt>
			<dd><?php echo htmlspecialchars(($acc['skill'] == "") ? "-" : $acc['skill']); ?></dd>
			<dt>facebook</dt>
			<dd><?php echo htmlspecialchars(($acc['facebook'] == "") ? "-" : $acc['facebook']); ?></dd>
			<dt>twitter</dt>
			<dd><?php echo htmlspecialchars(($acc['twitter'] == "") ? "-" : $acc['twitter']); ?></dd>
			<dt>メールアドレス（公開用）</dt>
			<dd><?php echo htmlspecialchars(($acc['pub_mailaddress'] == "") ? "-" : $acc['pub_mailaddress']); ?></dd>
			<dt class="last">自己PR（200字以内）</dt>
			<dd class="last"><?php echo htmlspecialchars(($acc['description'] == "") ? "-" : $acc['description']); ?></dd>
		</dl>
		<div class="registBtnArea">
			<a href="<?php echo ROOT_URL . 'Accounts/input/'; ?>"><img class="regist" src="<?php echo IMG_PATH . 'back_btn.png'; ?>" alt="戻る"></a>
			<a href="<?php echo ROOT_URL . 'Accounts/inputComp/'; ?>"><img class="regist2" src="<?php echo IMG_PATH . 'accountregist_btn.png'; ?>" alt="この情報で登録する"></a>
		</div>
	</div>
</div>
