<?php
//contactページ meta情報
$title = "お問い合わせ｜しつけ、厳選ペット用品の定期便";
$description = "お問い合わせ｜子犬の成長に必要なペット用品の定期便。あなたの子犬に合ったおもちゃ、おやつ、アクセサリー、しつけに必携の育て方ガイドなどを専門家が厳選して毎月お届けします！";
$keyword = "子犬,しつけ,ペット用品";
$h1 = "";
$pagetext = "お問い合わせ";
$pagefile = "contact";
$canonical = "https://koinu-step.com/contact";
?>
<?php include(dirname(__FILE__) . "/./metaHeader.php"); ?>

<div id="wrapper" class="<?php echo $pagefile; ?>">
    <?php include(dirname(__FILE__) . "/./header.php"); ?>
    <div id="contents">
      
<?php include(dirname(__FILE__) . "/./breadcrumb.php"); ?>

    <div id="formWrap">
      <div class="_c-container">
        <h1>お問い合わせ</h1>
        <h2 class="title">お問い合わせ</h2>

        <p class="attention">※は入力必須</p>

        <form method="post" action="mail.php">
        
        <div class="_c-row _c-row--middle _c-row--collapse">
          <div class="_c-row__col _c-row__col--1-5">
            <div>問い合わせ区分 <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <select name="問い合わせ区分" class="_c-form-control">
              <option value="">選択してください</option>
              <option>ご利用方法に関するお問い合わせ</option>
              <option>お支払方法に関するお問い合わせ</option>
              <option>商品の内容に関するお問い合わせ</option>
              <option>その他のお問い合わせ</option>
            </select>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse">
          <div class="_c-row__col _c-row__col--1-5">
            <div>お名前 <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <div class="_c-row__col _c-row__col--1-3"><span>姓</span>　<input type="text" name="姓" placeholder="" class="_c-form-control" /></div>
              <div class="_c-row__col _c-row__col--1-3"><span>名</span>　<input type="text" name="名" placeholder="" class="_c-form-control" /></div>
            </div>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse">
          <div class="_c-row__col _c-row__col--1-5">
            <div>お名前（フリガナ） <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <div class="_c-row__col _c-row__col--1-3"><span>セイ</span>　<input type="text" name="セイ" placeholder="" class="_c-form-control" /></div>
              <div class="_c-row__col _c-row__col--1-3"><span>メイ</span>　<input type="text" name="メイ" placeholder="" class="_c-form-control" /></div>
            </div>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse mail">
          <div class="_c-row__col _c-row__col--1-5">
            <div>メールアドレス <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <div class="_c-row__col _c-row__col--2-3"><input type="text" name="メールアドレス" placeholder="" class="_c-form-control" /></div>
            </div>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse mail">
          <div class="_c-row__col _c-row__col--1-5">
            <div>メールアドレス（確認） <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <div class="_c-row__col _c-row__col--2-3"><input type="text" name="メールアドレス（確認）" placeholder="" class="_c-form-control" /></div>
            </div>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse tel">
          <div class="_c-row__col _c-row__col--1-5">
            <div>電話番号 <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <div class="_c-row__col _c-row__col--2-3"><input type="text" name="電話番号" placeholder="" class="_c-form-control" />　<span class="attention">（半角）</span></div>
            </div>
          </div>
        </div>

        <div class="_c-row _c-row--middle _c-row--collapse content">
          <div class="_c-row__col _c-row__col--1-5">
            <div>お問い合わせ内容 <span class="orange">※</span></div>
          </div>
          <div class="_c-row__col _c-row__col--4-5">
            <div class="_c-row _c-row--left">
              <textarea class="_c-form-control" name="お問い合わせ内容" rows="7"></textarea>
            </div>
          </div>
        </div>

        <div id="btn_area">
          <label class="_c-checkbox"><input type="checkbox" name="プライバシーポリシーに同意する"><a href="/privacy" target="_blank">プライバシーポリシー</a>に同意する</label>
          <input class="btn btn_02" type="submit" value="問い合わせ確認" />
        </div>

        </form>
        
      </div>
    </div>

    </div>
    <?php include(dirname(__FILE__) . "/./footer.php"); ?>
</div>

<?php include(dirname(__FILE__) . "/./metaFooter.php"); ?>